<?php 
echo date_default_timezone_get()."<br>";
echo date('d-m-y // h-i-s')."<br>";
 date_default_timezone_set('africa/casablanca')."<br>";
echo date('d-m-y // h-i-s')."<br>";
date_default_timezone_set('africa/dakar')."<br>";
echo date('d-m-y // h-i-s')."<br>";
echo "=================================================<br>";

$var = date_create("",timezone_open("indian/comoro"));
echo date_format($var,"d-m-y / h-i-s");











?>