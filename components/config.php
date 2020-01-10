<?php 

$mysqli = new mysqli("localhost","root","","plastic");

//check connection 
if ( $mysqli === false ) 
 die("ERROR".$mysqli->connect_error);


?>

