<?php
session_start();
$errors = [];
$user_id = "";

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'example');
//$hostName = "sql313.ezyro.com";
//$dbUser = "ezyro_35596797";
//$dbPassword = "390a8009";
//$dbName = "ezyro_35596797_logindata";
//$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// Check for database connection errors
//if (!$conn) {
//    die("Database connection failed: " . mysqli_connect_error());
//}
/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // Ensure that the user exists in our system
  $query = "SELECT email FROM user2 WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  } else if (mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }

  // Generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // Store the token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);

    // Send an email to the user with the token in a link they can click on
    include('PHPMailer-5.2-stable/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'testerforwork666@gmail.com';
    $mail->Password = 'nicjzbkwdqrnghhj';
    $mail->SetFrom("testerforwork666@gmail.com");
    $mail->Subject = "Reset your password on examplesite.com";
    $mail->Body = "Hi there, click on this <a href=\"http://localhost/login-resgister/PHP/password_recovery/new_pass.php?token=" . $token . "\">link</a> to reset your password on our site";
    $mail->AddAddress($email);
    $mail->SMTPOptions = array('ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => false
    ));

    if (!$mail->Send()) {
      echo $mail->ErrorInfo;
    } else {
      header('location: pending.php?email=' . $email);
    }
  }
}