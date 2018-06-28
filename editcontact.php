<?php 
//editcontact.php
include "database.php";

$id  = $_POST['id'];
$name  = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$string = "UPDATE contacts SET name='$name', email='$email', address='$address',phone='$phone' WHERE id='$id'";
if ($con->query($string)) {
	echo "successfully updated contact";
}

 ?>