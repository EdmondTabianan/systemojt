<?php
	
	include_once("connection.php");
	$con = connection();
	
	if(isset($_POST['submit'])){
		
		$fname = $_POST['Firstname'];
		$mname = $_POST['middlename'];
		$lname = $_POST['Lastname'];
		$rook = $_POST['school'];
		$pawn = $_POST['grade'];
		$bishop = $_POST['section'];
		$queen = $_POST['Address'];
		$knight = $_POST['birthday'];
		$king = $_POST['contact'];
		
		$sql = "INSERT INTO `ojt`(`firstname`, `middlename`, `lastname`, `school`, `grade`, `section`, `address`, `birthday`, `contact`) 
		VALUES ('$fname','$mname','$lname','$rook','$pawn','$bishop','$queen','$knight','$king')";
		$con->query($sql) or die ($con->error);

		if ($fname = "") {

		} else {
			echo header("Location: reg.php");
		}
		
		
	}
?>  
<html>
	<head> 	
		<link rel="stylesheet" href="style.css">
	</head> 
	<body class="body">
		<form action="" method="post"><br><br>
			<label>First Name</label>
			<input type="text" name="Firstname" id="Firstname">
			<br><br>
			<label>Middle Name</label>
			<input type="text" name="Middlename" id="Middle">
			<br><br>
			<label>Last Name</label>
			<input type="text" name="Lastname" id="Lastname">
			<br><br>
			<label>School Name</label>
			<input type="text" name="school" id="school">
			<br><br>
			<label>Grade</label>
			<input type="text" name="grade" id="grade">
			<br><br>
			<label>Section</label>
			<input type="text" name="section" id="section">
			<br><br>
			<label>Address</label>
			<input type="text" name="Address" id="Address">
			<br><br>
			<label>Birthday<label>
			<input type="text" name="birthday" id="birthday">
			<br><br>
			<label>Contact</label>
			<input type="text" name="contact" id="contact">
			<br><br>
			<input type="submit" name="submit" value="submit">	
		</form> 
	</body>
</html> 