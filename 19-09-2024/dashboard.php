<?php 


session_start();

echo "welcome".$_SESSION['username'];

if(!$_SESSION['username'])
{
    header('Location:app.php');
}

?>


<a href="logout.php">Logout</a>