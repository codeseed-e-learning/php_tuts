<?php
require 'connection.php';
session_start();
error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];

// if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//     include 'request_error.php';
// } 
// echo "<pre>";
// // print_r($_SERVER);

$uri = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


$uri = explode("/", $uri );
$userid= $uri[4];



// echo $_SERVER['REQUEST_METHOD'];

// exit();

$query = "SELECT * FROM users WHERE id=$userid";
echo $query;
$executeQuery = mysqli_query($connection, $query);

// if (mysqli_num_rows($executeQuery) >= 1) {
//     $_SESSION['username'] = $username;
//     header('Location:dashboard.php');
// } else {
//     $_SESSION['error'] = "Login Failed";
//     header('Location:app.php');
// }
