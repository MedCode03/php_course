<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>filter_var</title>
</head>
<body>
   <form action="filter_var.php" method="post">
       <input type="text" name="email" placeholder="enter your email..">
       <input type="text" name="id" placeholder="enter your age..">
        <button type="submit" name="btn">send</button>
   </form>
</body>
</html>



<?php 
$email = $_POST["email"];
$id = $_POST["id"];
$arr = [];
if(isset($_POST["btn"])){ 
   if(!empty($email)&& !empty($id))
      { if(filter_var($email,FILTER_VALIDATE_EMAIL) && filter_var($id,FILTER_VALIDATE_INT,['options'=>['min_range'=>18,'max_range'=>45]]))
       { 
         echo "valid email $email and age $id";
          array_push($arr,[$email,$id]);
   
      } else{ echo "invalid email or age";}

  }
 
}

echo '<br>';
echo '<pre>';
  echo print_r($arr);
echo '</pre>';



















?>








