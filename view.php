<?php 
//make connection to database
include "database.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>View data</title>
</head>
<nav>
	<a href="index.php">home</a>
	<a href="form.php">form</a>
	<a href="view.php">view</a>
</nav>
<body>
	<h3>Read data From database </h3>

	<table border="1" cellpadding="1" class="table">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
$q =  mysqli_query($con,"SELECT * FROM contacts");
while($contact = mysqli_fetch_array($q) ) {
	?>
	<tr>
		<td><?php echo $contact['name'] ?></td>
		<td><?php echo $contact['email'] ?></td>
		<td><?php echo $contact['address'] ?></td>
		<td><?php echo $contact['phone'] ?></td>
		<td><a href="edit.php?id=<?php echo $contact['id'] ?>">Edit</a></td>
		<td><a href="delete.php?id=<?php echo $contact['id'] ?>">Del</a></td>
	</tr>

<?php	
}
?>
		
	</table>
</body>
</html>
