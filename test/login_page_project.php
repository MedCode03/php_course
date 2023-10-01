<?php
/* ============ work plan================

-customize length of each input 
-filter and sanitize the inputs 
-get the value of each input 
-push the data in new array
-create session
-create cookie and send the data to other page

*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body style="text-align: center;">
    <h2>LOGIN-FORM</h2>
    <form action="" method="post">
         <input type="text" name="email" placeholder="your email.."><br><br>
         <input type="password" name="password" placeholder="your password.."><br><br>
         <button type="submit" name="btn">connect</button><br><br>
    </form>
</body>
</html>

<?php
session_start();
$eml = $_POST["email"]; 
$pswrd = $_POST["password"]; 
$btn = $_POST["btn"]; 
 function func_fltr($eml){ 
      $san = filter_var($eml,FILTER_SANITIZE_EMAIL);
      return  filter_var($san,FILTER_VALIDATE_EMAIL);
      
 }

 if(isset($btn)){ 
//length
  if(strlen($eml)>7 && strlen($pswrd)>= 8 )
         { 
         
            if(func_fltr($eml)){ //filter and sanitize function
            $_SESSION["email"] = $eml;
            $_SESSION["password"] = $pswrd;
            header('location: home.php');
                
            }else{echo "ERROR incorrect email";}
           

         }else{echo "ERROR email or password so short!";}

      }
      
      else{echo "ERROR";}

 



?>