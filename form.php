<?php 
session_start();
?>
<form action="" method="post">
    <input type="text" name="firstname" placeholder="firstname">
    <input type="text" name="lastname" placeholder="lastname">

    <input type="submit" value="Submit" name="login">
</form>

<?php 


if(isset($_POST['login'])){
    $_SESSION['username'] = $_POST['firstname'];
    header('location:18-09-2024/sessions.php');
}

