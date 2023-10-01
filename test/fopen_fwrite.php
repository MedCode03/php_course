<?php 
$inpt = $_POST["file"];
$inpt2 = $_POST["file2"];
$btn = $_POST["btn"];
$var = fopen('ex.txt','w+');
if(isset($btn)){ 
     /* $val = filter_var($inpt,FILTER_SANITIZE_EMAIL) ; //sanitize input field
    if(!empty($inpt)&& filter_var($val,FILTER_VALIDATE_EMAIL)){ 
           fwrite($var,$inpt); // if th input is valid write thier value in the file 
        }
}
*/
if(!empty($inpt && $inpt2)){ 
$new_var = fopen("$inpt.txt",'a');
fwrite($new_var,$inpt2);


}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fopen</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="file" placeholder="enter file name..">
        <input type="text" name="file2" placeholder="file contents..">
        <button type="submit" name="btn">send</button>
    </form>
</body>
</html>