<?php
    include '../admin/connect.php';
    if(isset($_POST ['submit']) && $_POST["name"]!= '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["rpassword"] != ''){
        //
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
        if($password != $rpassword ){
            header("loaction: sign-up.php");
        }
        $sql = "SELECT * FROM user WHERE name='$name' ";
        $old = mysqli_query($conn, $sql);
        if( mysqli_num_rows($old) > 0){
            header("location: sign-up.php");
        }  
        $sql = "INSERT INTO user (name,email,password) VALUE ('$name', '$email', '$password')";
        mysqli_query($conn, $sql);
        header("location: sign-in.php");
    }else{
        header("location: sign-up.php");
    }