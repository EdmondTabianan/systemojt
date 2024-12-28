<?php	

	if(!isset($_SESSION)) {
	session_start();
	
	if(isset($_SESSION['Access']) && $_SESSION['Access'] == "admin"){
		echo "Welcome ".$_SESSION['UserLogin']."<br><br>";
	} else{
		echo header("Location: index.php");
	}
	}
	include_once("connection.php");

	   
	  
	  $id = $_GET['ID'];
	

$sql = "SELECT * FROM ojt where pid ='$id'";
$studends = $con->query($sql) or die ($con->error);
$row = $studends->fetch_assoc();

?>

<html>
	<head> 	
		<link rel="stylesheet" href="style.css">
	</head> 
	<body class="body">
		  <button> <a href="index.php">Back</button></a>
		  <button> <a href="edit.php?ID=<?php echo $row['pid'];?>">Edit</button></a>
		<form action="delete.php" method="post">
		  <button type="submit" name="delete" >Delete</button>
		  <input type="hidden" name="ID" value="<?php echo $row['pid'];?>">

		</form>
		<br>
		<table> 
			<thead> 
				<tr> 
				  <th> Firstname </th>
				  <th> Midlename</th>
				  <th> Lastname</th>
				  <th> Schoolname</th>
				  <th> Grade</th>
				  <th> Section</th>
				  <th> Address</th>
				  <th> Birthday</th>
				  <th> Contact</th>
				</tr>
			</thead>
			<tbody>
			<?php  do{ ?>
			
			<tr> 
				<td><?php echo $row['firstname']; ?></td>
				<td><?php echo $row['midllename']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['school']; ?></td>
				<td><?php echo $row['grade']; ?></td>
				<td><?php echo $row['section']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['birthday']; ?></td>
				<td><?php echo $row['contact']; ?></td>
			</tr>
			<?php }while($row = $studends->fetch_assoc()) ?>	
			</tbody>
		</table>
	</body>
</html>