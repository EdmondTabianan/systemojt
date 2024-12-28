<?php	

	if(!isset($_SESSION)) {
	session_start();
	
	if(isset($_SESSION['UserLogin'])){
	  echo '<h2 color="white">Welcome </h2>'.$_SESSION['UserLogin'];
	}else{
	  echo '<h2 color="white">Welcome </h2><b>guest</b>';
	}
	include_once("connection.php");
	$con = connection();
	}
	?>
<?php	

	
	include_once("connection.php");
	$con = connection();


	$sql = "SELECT * FROM ojt";
	$studends = $con->query($sql) or die ($con->error);
	$row = $studends->fetch_assoc();
?>

<html>
	<head> 	
		<link rel="stylesheet" href="header.css">
	</head> 
	<header class="header">
	<div class="navbar">
	  <a class="Logo"  href="http://localhost/systemojt/index.php"> <p class="logo">ORS </p> </a>
		<ul>
			<li><?php if(isset($_SESSION['UserLogin'])){?>
				<a href="logout.php">LOG OUT</a>
				<?php } else{?>
			<li> <a href="login.php"> Login </li> </a>
				<?php }?>  
			<li> <a href="add.php"> ADD DATA </li> </a>
			<li> <a href="http://localhost/systemojt/index.php"> HOME </li> </a>
		</ul>
	</div>	
	</header>
	<body class="body">
		<center>
			<table class="table"> 
				<thead> 
					<tr> 
						<th></th>
						<th> First Name </th>&nbsp;
						<th> Last Name</th>
					</tr>
				</thead>
			<tbody>
			<?php  do{ ?>
				<tr>
					<td><a class="awd" href="detail.php?ID=<?php echo $row['pid'];?>">view</a></td>
					<td><?php if(empty($row['firstname'])) {
							 echo "No record";
						 } else {
							  echo $row['firstname'];
						  }?>
					</td>
				
						<td><?php if(empty($row['lastname'])) {
							echo "No record";
						  }else{
						  echo $row['lastname'];
						  } ?>
					</td>
				<!--<?php// if(empty('<td>'.$row['firstname'].'</td>'."<td>".$row['lastname']."<td>")) {
						#	  echo "No Record";
					     // } else
						//	  echo $row['firstname'].$row['lastname']; 	{
						 // }
						?>-->
				</tr>
					<?php }while($row = $studends->fetch_assoc()) ?>	
				</tbody>
			</table>
		</center>
	</body>
</html>