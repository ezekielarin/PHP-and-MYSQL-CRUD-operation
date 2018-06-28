<?php 
include "database.php";

$id =  $_GET['id'];
mysqli_query($con,"DELETE FROM contacts WHERE id='$id'");
header('location: view.php');

 ?>