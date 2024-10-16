<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Password Reset PHP</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php
    require_once "app_logic.php";

    // ENTER A NEW PASSWORD
    $errors = array(); // Initialize the errors array

    if (isset($_POST['new_password'])) {
      $new_pass = $_POST['new_pass'];
      $new_pass_c = $_POST['new_pass_c'];
      $token = $_POST['token'];

      if (empty($new_pass) || empty($new_pass_c)) {
        array_push($errors, "Password is required");
      }
      if ($new_pass !== $new_pass_c) {
        array_push($errors, "Passwords do not match");
      }
      if (strlen($new_pass) < 8) {
        array_push($errors, "Password should be at least 8 characters long");
      }

      if (count($errors) === 0) {
        // Validate the token
        $sql = "SELECT email FROM password_resets WHERE token=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $email = null;
        if ($result) {
          $row = $result->fetch_assoc();
          if ($row) {
            $email = $row['email'];
          }
        }

        if ($email) {
          // Update the password
          $hashed_password = password_hash($new_pass, PASSWORD_BCRYPT);
          $sql = "UPDATE user2 SET password=? WHERE email=?";
          $stmt = $db->prepare($sql);
          $stmt->bind_param("ss", $hashed_password, $email);
          $stmt->execute();

          // Display success message and redirect to login page
          echo "<script>alert('Password reset successful. Please login with your new password.');</script>";
          header('location: ../sign-in.php');
          exit();
        } else {
          array_push($errors, "Invalid token. Please try again.");
        }
      }
    }

    // Check if the token is present
    if (!isset($_GET['token'])) {
      array_push($errors, "Invalid token. Please try again.");
    }
    ?>

    <form class="login-form" action="new_pass.php" method="post">
        <h2 class="form-title">New password</h2>
        <!-- form validation messages -->
        <?php if (count($errors) > 0): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
            <p class="msg"><?php echo $error; ?></p>
            <?php endforeach ?>
        </div>
        <?php endif ?>

        <div class="form-group">
            <label>New password</label>
            <input type="password" name="new_pass" id="new_pass">
        </div>
        <div class="form-group">
            <label>Confirm new password</label>
            <input type="password" name="new_pass_c" id="new_pass_c">
        </div>
        <input type="hidden" name="token" value="<?php echo isset($_GET['token']) ? $_GET['token'] : ''; ?>">
        <div class="form-group">
            <input type="checkbox" id="show_password">
            <label for="show_password">Show password</label>
        </div>
        <div class="form-group">
            <button type="submit" name="new_password" class="login-btn">Submit</button>
        </div>
    </form>

    <script>
    const showPasswordCheckbox = document.getElementById('show_password');
    const newPasswordInput = document.getElementById('new_pass');
    const confirmPasswordInput = document.getElementById('new_pass_c');

    showPasswordCheckbox.addEventListener('change', function() {
        if (showPasswordCheckbox.checked) {
            newPasswordInput.type = 'text';
            confirmPasswordInput.type = 'text';
        } else {
            newPasswordInput.type = 'password';
            confirmPasswordInput.type = 'password';
        }
    });
    </script>
</body>

</html>