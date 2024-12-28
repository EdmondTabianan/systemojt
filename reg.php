<?php
	include_once("connection.php");
	$con = connection();
	
	if(isset($_POST['submit'])){
		
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$acc = $_POST['access'];
		
		
		$sql = "INSERT INTO `login`(`username`, `password`,`access`) 
		VALUES ('$user','$pass','$acc')";
		$con->query($sql) or die ($con->error);
		
		  header("Location: index.php");
	}
	?>  	

<html>
	<head> 	
			<link rel="stylesheet" href="style.css">
	</head> 
	<body class="body">
		<form action="" method="post"><br><br>
			<label>User Name</label><br>
			<input type="text" name="username" id="username">
			<br><br>
			<label>Password</label><br>
			<input type="password" name="password" id="password">
			<br><br>
			<label>access</label><br>
			<input type="" name="access" id="access"><br>
			<p color="red"> admin and user only </p><br>
			<input onClick="myFunction" type="submit" name="submit" value="Submit"><br><br>
			<button> <a class="home" href="index.php"> Home </a></button>
		</form> 
	</body>
</html> 