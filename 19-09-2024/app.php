<?php 

session_start();
error_reporting(0);
if(!$_SESSION['error']){
    $_SESSION['error'] = "";
}

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen flex justify-center items-center">
  <form action="login.php" class="w-96 h-auto p-5 border" method="post">
    <div class="login text-center mb-4 text-3xl">Login</div>
    <input type="text" name="username" id="username" class="border w-full p-2" placeholder="username">
    <input type="password" name="password" id="password" class="border mt-2 w-full p-2" placeholder="password">
    <p class="text-red-500 font-semibold"><?php echo $_SESSION['error'] ?></p>
    <input type="submit" id="username" class="border w-full p-2 mt-2 cursor-pointer bg-green-500 text-white" value="login">
  </form>
</body>
</html>