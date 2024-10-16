<?php
    session_start();
    session_destroy();
    echo json_encode(['success' => true, 'message' => 'Logout successful!']);
    header("location:sign-in.php");
    exit();
?>