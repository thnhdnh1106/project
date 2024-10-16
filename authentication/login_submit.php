<?php
    session_start();
    include '../admin/connect.php';
    if(isset($_POST ['submit']) && $_POST["email"] != '' && $_POST["password"] != '' ){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $user = mysqli_query($conn, $sql);
        if( mysqli_num_rows($user) > 0 ) {
            $_SESSION["user"] = $email;
            header("Location: ../index.php");
        }else{
            header("location:sign-in.php");
        }
    }else{
        header("location:sign-in.php");
    }
?>