<?php 


require 'connection.php';

$userDetails = [
    "firstname" => $_POST['firstname'],
    "lastname" => $_POST['lastname'],
    "email" => $_POST['email'],
    "password" => $_POST['password'],
];

$db->register($userDetails);


