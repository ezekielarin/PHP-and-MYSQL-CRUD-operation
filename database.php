<?php
$host = 'localhost';
$user = 'root';
$pass = '11dbpass';
$db = 'tutorials';
$con = mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$db);

?>