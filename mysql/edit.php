<?php
	
	include_once("connection.php");
	$con = connection();
	$id = $_GET['ID'];
	
	 $sql = "SELECT * FROM ojt where pid ='$id'";
	 $studends = $con->query($sql) or die ($con->error);
	 $row = $studends->fetch_assoc();
	
	if(isset($_POST['submit'])){
		
		$fname = $_POST['Firstname'];
		$mname = $_POST['Middlename'];
		$lname = $_POST['lastname'];
		$rook = $_POST['schoolname'];
		$pawn = $_POST['grade'];
		$bishop = $_POST['section'];
		$queen = $_POST['Address'];
		$knight = $_POST['birthday'];
		$king = $_POST['contactnumber'];
		
		$sql = "UPDATE ojt SET firstname  = '$fname', middlename = '$mname', lastname ='$lname', schoolname= '$rook', grade ='$pawn',section = '$bishop', address = '$queen', birthday = '$knight', contactnumber = '$king' WHERE pid = '$id'";
		$con->query($sql) or die ($con->error);
		
		  echo header("Location: detail.php?ID=".$id);
	}
?>  
	

<html>
	<head> 	
			<link rel="stylesheet" href="style.css">
	</head> 
	<body class="body">
		<form action="" method="post">
			<label>First Name</label><br>
			<input type="text" name="Firstname" id="firstname" value="<?php echo $row['firstname']?>">
			<br>
			<label>Middle Name</label><br>
			<input type="text" name="Middlename" id="middlename" value="<?php echo $row['middlename']?>">
			<br>
			<label>LastName</label><br>
			<input type="text" name="lastname" id="lastname" value="<?php echo $row['lastname']?>">
			<br>
			<label>School Name</label><br>
			<input type="text" name="school" id="schoolname" value="<?php echo $row['schoolname']?>">
			<br>
			<label>Grade</label><br>
			<input type="text" name="grade" id="grade" value="<?php echo $row['grade']?>">
			<br>
			<label>Section</label><br>
			<input type="text" name="section" id="section" value="<?php echo $row['section']?>">
			<br>
			<label>Address</label><br>
			<input type="text" name="Address" id="address" value="<?php echo $row['address']?>">
			<br>
			<label>Birthday<label><br>
			<input type="date" name="birthday" id="birthday" value="<?php echo $row['birthday']?>">
			<br>
			<label>Contact</label><br>
			<input type="number" name="contact" id="contactnumber" value="<?php echo $row['contactnumber']?>">
			<br><br>
			<input type="submit" name="submit" value="submit">	
		</form> 
	</body>
</html> 