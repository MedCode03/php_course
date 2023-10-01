
<?php 
session_start();
  $_SESSION["email"] = $_POST["email"] ;
  $_SESSION["password"] = $_POST["password"];
  if(isset($_POST["btn"])){ 
    header('location: session2.php');
  }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <form action="" method="post"> 
         <input type="text" name="email" placeholder="set your email.."><br>
         <input type="password" name="password" placeholder="set your password.."><br>
         <button type="submit" name="btn">connect</button>
    </form>
</body>
</html>

