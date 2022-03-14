<?php
$servername='localhost:3306';
$username='it493team4';
$password='Password12!';
$dbname="Elite_Action"; 
$conn=mysqli_connect($servername,$username,$password, $dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>