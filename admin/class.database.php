<?php

$severname = "localhost";
$username = "root";
$password = "";
$db = "example";
global $conn;

$conn = mysqli_connect($severname, $username, $password,$db);
if(!$conn)
{
    die('could not connect : ' .mysqli_error($conn));
}
mysqli_select_db($conn,$db);