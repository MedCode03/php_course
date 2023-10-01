<?php
/*
 ============ data types integer/float/string/array========
$num1 =23;
$num2 =21;
$num3 = 6;
$arr = ['mohamed','salma','malak'];
echo  $arr[0] ,' ', 'is',' ', $num1  ;
echo '<br>';
echo  $arr[1] ,' ','is',' ', $num2 ;
echo '<br>';
echo  $arr[2],' ' ,'is',' ', $num3  ;

echo '<br>';
*/
         //data types casting (transform data type)
/*
  
  echo 3 + '4.4';
  echo '<br>';
  echo gettype(3 + '4.4');
  echo '<br>';
  echo gettype((double)3 + (int)'4.4');
  echo '<br>';
  echo 5.5 + 5;
  echo '<br>';
  echo gettype(5.5 + 5);
  echo '<br>';
  echo gettype((int)(5 + 5.5));
  echo '<br>';
  $name = '  mohamed';
  $age  = 23;
  echo gettype((int)' 2 m ohamed' + (double)23);
  echo '<br>';

  echo '<br>';
  echo '<br>';
  echo '<br>';
*/
/*

echo nl2br('hello
 gays 
 im 
 mohamed');
$arr = [3,'0',2];
echo'<br>';
var_dump('str');
echo'<br>';
var_dump((bool)'');
echo'<br>';
var_dump((bool)0.5);
echo'<br>';
var_dump((bool)$arr[2]);
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
*/


//============= hereDoc and NowDoc==========================

// HereDoc(read variables)
 
/*
  ==========    Arrays print elements ============== 
$arr = 'mohamed';
$arr[0] = 'M';
$arr[6] = 'D';

$text = <<<"Here"
hello my first letter is $arr[0] i'm 23 yrs old 
my last letter is $arr[6].
$arr[0]
$arr[6]
==================================================
Here;

echo nl2br($text);

// NowDoc( don't read variables)
$name2 = 'simo';
$sec = <<<'now'
<br>
 my name is $name3
23yrs
full stack dev
now;
echo nl2br($sec);
*/
 /*
$arr = [3.4,5,7];
echo gettype($arr[0]);
echo '<br>';
echo '<pre>';

nl2br(print_r(
  [ 
   'A' => 'mohamed', 
   'B' => 'php',
   'malak',
   6 => 'new',
    'java',
    'web',
   '4' => 'css',
   'sec' => ['a','b']
  ]
  ));
echo '</pre>';
echo '<br>';

array_push([0])
*/

   //Negation of variable(-$var)
   /*
   $var = "-4";
   echo $var;
   echo '<br>'; 
   echo gettype($var);//string
   echo '<br>';
   
   echo -$var;
   echo '<br>';
   echo gettype(-$var);//integer
 */
   //Identity of variable(+$var)
   /*
    $var = '384'; // thias is a string
    echo $var;
    echo "<br>";
    echo gettype($var); //string
    echo "<br>";
    echo gettype(+$var); //integer
*/
/*

$arr1 = [1=>'jhon',2=>'kouhil'];
$arr2 = [1=>'mohamed',2=>'Doe'];
$var = 'this is php';
$name = $arr1[1] .' '. $arr2[2];
echo '<pre>';
print_r($arr1 + $arr2);
echo '<br>';
var_dump($arr1 === $arr2);
echo '<br>';
echo"my name is ". $arr1[1] .' '. $arr2[2];
echo '<br>';
echo "what is this language ? " .$var." ". " what your name? "."my name is ".$name;
echo '<br>';
echo '<br>';
echo '</pre>';
*/
// ===============CONDITIONS(if-elseif-else)=============================
/*
$ar = 'marhaban';
$en = 'hello';
$es = 'hola';
$name = $_POST["user"];
$language = $_POST["lang"];
if($_SERVER["REQUEST_METHOD"]==="POST")
{
if($language =='ar'&& $name!=''){ 
header('location:ar.php');
exit();
echo $ar.' '.$name;
}
elseif($language =='en'&&$name!=''){
  header('location:en.php');
exit();
echo $en.' '.$name;

}
elseif($language =='es'& $name!=''){ 
  echo $es.' '.$name;}
else{echo "ERROR!";} 
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if example</title>
</head>
<body>
  <form action="index.php" method="POST">
     <input type="text" name="user">
     <select name="lang" id="">
       <option value="ar">ARABIC</option>
       <option value="en">ENGLISH</option>
       <option value="es">SPANISH</option>
     </select>
     <input type="submit" value="ok">
  </form>
</body>
</html>

?>

********************project donation seism*************************************


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>seism donation</title>
</head>
<body>
  <form action="index.php" method="POST">
      <input type="text" name="username" placeholder="username">
      <input type="text" name="country" placeholder="your country">
      <input type="number" name="don" placeholder="donation(DH)">
      <button type="submit">submit</button>
  </form>
  <?php 
$name = $_POST["username"];
$country = $_POST["country"];
$donate = $_POST["don"];
$sold = "3000";
 if($_SERVER["REQUEST_METHOD"]==="POST")
 {
  if(!empty($name) && !empty($country) && !empty($donate))
 {
      if($donate <= $sold)
      {
     echo "<h2 style='text-align:center;'>$country</h2>";
     echo "<br>";
     echo "HELLO $name your donation is don !";
     echo "<br>";
     echo "TOTAL PAYED: $donate DH";
     echo "<br>";
     echo "your new SOLD is : ".$sold - $donate. " DH";
    }else{exit();}

  }
}

  
  ?>
</body>
</html>

    



?>
**********************project using functions / if condition/post method*************
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>payment gsm</title>
 </head>
 <body>
   <form action="index.php" method="post">
      <input type="number" name="gsm" placeholder="y/ our GSM..">
      <input type="text" name="network" placeholder="your NETWORK..">
      <button type="submit" name="sub">pay</button>
   </form>
  <?php 
   $gsm = $_POST["gsm"];
   $net = $_POST["network"];
  function offers($price,$net){ 
    echo "<input  type='checkbox'/><label>$price dh *1 $net</label><br>";
    echo "<input  type='checkbox'/><label>$price dh *2 $net</label><br>"; 
    echo "<input  type='checkbox'/><label>$price dh *3 $net</label><br>"; 
  }

  
  function config(){ 
    $gsm = $_POST["gsm"];
    $net = $_POST["network"];
    if($gsm =="0700" && $net =="inwi"){ 
      echo " welcome on your network : inwi <br>";
      echo "  your GSM : 0700.... <br>" ;
      offers("10",$net);
      offers("30",$net);
    }elseif($gsm=="0623"&& $net=="iam")
    { 
      offers("5",$net);
      offers("50",$net);

    }
    else{ 
       echo "UNKNOWN gsm or network";
    }
    

  }

  if(isset($_POST["sub"]))
  { 
    if($gsm!==""){config();}
    
  }
  


  ?>

 </body>
 </html>
 
   // function spread operators 
 $arr = ['taza','fez','nador'];
 function travel($user,...$cities){ 
  echo "hello $user you are going to : <br>";
  foreach($cities as $city){ 
    echo $city ."<br>";
  }
 }
  travel('simo',...$arr);

//variable function
 $var = 'travel';
 echo $var('simo',$arr[0]);






$name = function($n){ 
   return "hello $n";
};
$username = "simo";
$email = function() use ($username){ 
  return $username."@".".com";
};
 echo $username;
 
 echo "<br>";

 echo $email();
 echo "<br>";
 echo $name($username);
 echo "<br>";
 echo "<br>";
 */




/*
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>string function</title>
</head>
<body>
  <form action="index.php" method="post">
     <input type="text" name="txt">
     <button type="submit" name="btn">confirm</button>
  </form>
  <?php  
   $inpt = $_POST["txt"];
   if(isset($_POST["btn"])){ 
       if(!empty($inpt))
  {echo "<br>";
    
    echo "lengh of string is : ". strlen($inpt) ;
    echo "<br>";
    echo "the first letter lowerCAse: ".lcfirst($inpt);
    echo "<br>";
    echo "the first letter upperCAse: " .ucfirst($inpt);
    echo "<br>";
    echo str_replace("mohamed","jhon",$inpt)."<br>";
    echo $inpt;
    echo "<br>";
    echo "uppercase : " .strtoupper($inpt);
    echo "<br>";
    echo "lowercase : " .strtolower($inpt);
    echo "<br>";
    echo "<pre>";
    echo print_r(explode(" ",$inpt));
    echo "</pre>";
    $arr = explode(" ",$inpt);
    foreach($arr as $el){if(strlen($el)<=4){echo "element lenth<=4 :".$el."<br>";}}
    echo "<br>";
    echo implode('/' , $arr);
    echo "<br>";
    echo trim('/',$inpt);
    echo "<br>";
    
    echo $inpt;
    echo "<br>";
    echo str_replace(['@','#','$','&','*'],"",$inpt);
    echo "<br>";

    echo '<pre>';
    echo print_r(str_replace([1,2,3,4],["one","two","three"],explode(" ",$inpt)));
    echo '</pre>';
    echo "<br>";
  
  
  }
  
  
   }
   
   ?>
</body>
</html>
*/



 













