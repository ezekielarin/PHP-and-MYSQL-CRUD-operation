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
	<form action="addcontact.php" method="post">
		<label></label><input type="text" name="name" placeholder="Name">
		<br>
		<label></label><input type="email" name="email" placeholder="Email">
		<br>
		<label></label><input type="text" name="phone" placeholder="+2345678232">
		<br>
		<label></label><input type="text" name="address" placeholder="No.15, anderson drive">
		<br>
		
	    <select name="occupation">
	    	<option>Student</option>
	    	<option>Banker</option>
	    	<option>farmer</option>
	    </select>
	    <br>
	    <span>are you over 18: </span>
	   <span>Yes</span> <input type="radio" name="age">
	   <span>No</span><input type="radio" name="age" >
	    <br>
	    <label>Do you agree</label>
	    <input type="checkbox" name="">
	    <br>
	    <input type="submit" name="submit" value="submit">
	</form>

</body>
</html>