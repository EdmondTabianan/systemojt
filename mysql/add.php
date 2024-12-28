<?php
	
	include_once("connection.php");
	$con = connection();
	
	if(!isset($_SESSION)) {
	 session_start();
	
		if(isset($_SESSION['Access']) && $_SESSION['Access'] == "admin"){
	      echo "Welcome ".$_SESSION['UserLogin']."<br><br>";
		} else{
	      echo header("Location: notadmin.php");
		}
	}
	if(isset($_POST['submit'])){
		
		
		$fname = $_POST['Firstname'];
		$mname = $_POST['Middlename'];
		$lname = $_POST['Lastname'];
		$rook = $_POST['school'];
		$pawn = $_POST['grade'];
		$bishop = $_POST['section'];
		$queen = $_POST['Address'];
		$knight = $_POST['birthday'];
		$king = $_POST['contact'];
		
		$sql = "INSERT INTO `ojt`(`firstname`, `middlename`, `lastname`, `schoolname`, `grade`, `section`, `address`, `birthday`, `contactnumber`) 
		VALUES ('$fname','$mname','$lname','$rook','$pawn','$bishop','$queen','$knight','$king')";
		$con->query($sql) or die ($con->error);
		
		  echo header("Location: index.php");
	}
?>  
<html>
	<head> 	
		<link rel="stylesheet" href="style.css">
	</head> 
		<body class="body">
			<form action="" method="post"><br><br>
				<label>First Name:</label><br>
				<input type="text" name="Firstname" id="Firstname"><br>
				<label>Middle Name:</label><br>
				<input type="text" name="Middlename" id="Middle">
				<br>
				<label>Last Name:</label><br>
				<input type="text" name="Lastname" id="Lastname"><br>
				<label>School Name:</label><br>
				<input type="text" name="school" id="school">
				<br>
				<label>Grade:</label><br>
				<input type="text" name="grade" id="grade">
				<br>
				<label>Section:</label><br>
				<input type="text" name="section" id="section">
				<br>
				<label>Address:</label><br>
				<input type="text" name="Address" id="Address">
				<br>
				<label>Birthday:<label><br>
				<input type="date" name="birthday" id="birthday">
				<br>
				<label>Contact:</label><br>
				<input type="number" name="contact" id="contact">
				<br><br>
				<input type="submit" name="submit" value="Submit">
		</form> 
	</body>
</html> 