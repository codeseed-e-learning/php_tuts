<?php 

session_start();

$fullname = $_POST['fullname'];
$message = $_POST['message'];
$number =$_POST['number'];

include 'connection.php';

$insert = "INSERT INTO inquiries (fullname , phonenumber , message) VALUES ('$fullname' ,'$number', '$message' )";
echo $insert;
$executeQuery = mysqli_query($connection , $insert);

if($executeQuery)
{
    $_SESSION['insert_status'] = true;
    header('location: contact.php');
} else {
    echo "FAILURE";
}