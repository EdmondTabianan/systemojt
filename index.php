<html>
	<head> 
		<?php 
			if(!isset($_SESSION)) {
				session_start();
			}
		?>
		
		<title> HOME </title>
		<link rel="stylesheet" href="style.css"> 
		<link rel="icon" href="img/anya.png" type="image/icon type">
	</head>
		<header class="header"> 
		<div class="navbar">
	
				<a class="Logo"  href="index.php"> <p class="logo">ORS</p> </a>
			<ul>  
				<li> <a href="mysql/index.php?username='$id'"> OJT Records</li> </a>
				<!--<li> <a href="record.php"> OJT Records</li> </a>-->
				<li> <?php if(isset($_SESSION['UserLogin'])){?>
				<a href="logout.php">LOG OUT</a>
				<?php } else{?>
				<a href="login.php"> LOGIN</a>
				<?php }?>  
				<li> <a href="reg.php"> Register </li> </a>
			</ul>
		</div>	
		</header>
		<body class="body"><br><br><br>
		<center>
			<button onclick="MyCustomFunction()" class="but"> Click this </button>
				</center>
				<script>
						function MyCustomFunction(){
							alert("you have been hacked!");
							alert("Joke lang (; ");
						}
				</script>
		</body>
</html>