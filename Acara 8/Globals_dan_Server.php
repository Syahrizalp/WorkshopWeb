<?php
//global
$x = 75;
$y=25;

function addition(){ 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
addition();
echo $z;

//server
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['HTTP_HOST'] . "<br>";
echo $_SERVER['HTTP_REFERER']  . "<br>";
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['SCRIPT_NAME'] . "<br>";
?>
