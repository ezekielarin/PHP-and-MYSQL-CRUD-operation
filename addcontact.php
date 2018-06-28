<?php 
include "database.php";

$name  = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];


$string = "INSERT INTO contacts (name,email,address,phone) VALUES ('$name','$email','$address','$phone')";
if ($con->query($string)) {
	echo "successfully added contact";
}else{
	echo "error occured".$con->error;
}

 ?>