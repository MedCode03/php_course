<?php
session_start(); 
 $ses_eml = $_SESSION["email"];
 $ses_pswrd = $_SESSION["password"] ;
setcookie("email",$ses_eml,time() + 20);
setcookie("password",$ses_pswrd,time()+20);
echo "<h2>home page</h2><br>";
echo "hello ". $ses_eml."<br>";
echo "your password is : ". $ses_pswrd."<br>";




?>