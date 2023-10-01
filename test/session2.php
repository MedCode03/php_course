<?php 
session_start();
echo "hello your email is :" .$_SESSION['email'] ."<br>";
echo " your password is : ".$_SESSION["password"] ."<br>";
echo "<a href='cookie_session.php'>prev page</a>"


?>