<?php 
//make connection to database
include "database.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Tutorials</title>
</head>
<nav>
	<a href="index.php">home</a>
	<a href="form.php">form</a>
	<a href="view.php">view</a>
</nav>
<body>

	<form action="editcontact.php" method="post">
	<?php 
	$id = $_GET['id'];
	$q =  mysqli_query($con,"SELECT * FROM contacts WHERE id='$id'");
	while($contact = mysqli_fetch_array($q) ) {
	?>
	   <input type="hidden" name="id"  value="<?php echo $contact['id']?>">
		<label></label><input type="text" name="name" placeholder="Name" value="<?php echo $contact['name']?>">
		<br>
		<label></label><input type="email" name="email" placeholder="Email" value="<?php echo $contact['email']?>">
		<br>
		<label></label><input type="text" name="phone" placeholder="+2345678232" value="<?php echo $contact['phone']?>">
		<br>
		<label></label><input type="text" name="address" placeholder="No.15, anderson drive" value="<?php echo $contact['address']?>">
		<br>
		
	    <input type="submit" name="submit" value="submit">
	    <?php	
		}
		?>
	</form>

</body>
</html>