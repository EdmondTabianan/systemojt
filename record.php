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
	
	<a class="Logo"  href="index.php"> <p class="logo">OR</p>S </a>
		<ul>
			<li>  
			<li> <a href="mysql/index.php?username='$id'"> CRUD</li> </a>
			<li> <?php if(isset($_SESSION['UserLogin'])){?>
				 <a href="logout.php">LOG OUT</a>
				 <?php } else{?>
				 <a href="login.php"> LOGIN</a>
				<?php }?>  
			<li> <a href="index.php"> HOME </li> </a>
		</ul>
	</div>	
	</header>
	<body class="body"> 
	

	</body>
</html>