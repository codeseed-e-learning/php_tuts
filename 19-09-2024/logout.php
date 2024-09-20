<?php 

session_start();
if(!$_SESSION['username'])
{
    header('Location:app.php');
}

session_destroy();
header('Location:app.php');
