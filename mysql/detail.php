<?php	

	if(!isset($_SESSION)) {
	 session_start();
	
		if(isset($_SESSION['Access']) && $_SESSION['Access'] == "admin"){
	      echo "Welcome ".$_SESSION['UserLogin']."<br><br>";
		} else{
		//echo '<div class="popup">
		//<span class="popuptext" id="myPopup">for admin only</span>
		//</div>';
	  echo header("Location: notadmin.php");
		}
	}
	include_once("connection.php");

	  $con = connection();
	  
	  $id = $_GET['ID'];
	

$sql = "SELECT * FROM ojt where pid ='$id'";
$studends = $con->query($sql) or die ($con->error);
$row = $studends->fetch_assoc();

?>

<html>
	<head> 
		<?php 
			if(!isset($_SESSION)) {
		session_start();
			}
		?>
		
		<title> HOME </title>
		<link rel="stylesheet" href="header.css"> 
		<link rel="icon" href="img/anya.png" type="image/icon type">
</head>
<header class="header">

		 
		<div class="navbar">
	
	<a class="Logo"  href="index.php"> <p class="logo">ORS </p> </a>
	<ul>
	<li><a href="index.php">Back</a></li>
	<li><a href="edit.php?ID=<?php echo $row['pid'];?>">EDIT</a></li>
	<li>
		<form action="delete.php" method="post">
			<input type="hidden" name="ID" value="<?php echo $row['pid'];?>">
			<button type="submit" name="delete" class="delete">Delete</button>
		</form>
	</li>
	</ul>
	</div>	
</header>
	<body class="body">
		<br>
		<center>
			<table class="table"> 
				<thead> 
					<tr> 
					<th> First Name </th>
					<th> Midle Name</th>
					<th> Last Name</th>
					<th> School Name</th>
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
				<td><?php echo $row['middlename']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['schoolname']; ?></td>
				<td><?php echo $row['grade']; ?></td>
				<td><?php echo $row['section']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['birthday']; ?></td>
				<td><?php echo $row['contactnumber']; ?></td>
			</tr>
			<?php }while($row = $studends->fetch_assoc()) ?>	
			</tbody>
		</table>
		</center>
	</body>
</html>