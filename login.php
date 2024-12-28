<?php	

	if(!isset($_SESSION)) {
		session_start();

	include_once("connection.php");

	$con = connection();

	if(isset($_POST['login'])){
	
	  $username = $_POST['username'];
	  $password = $_POST['password'];
		
	  $sql = "SELECT * FROM login WHERE username = '$username' AND password ='$password'";
	  $user =$con->query($sql) or die($con->error);
	  $row =$user->fetch_assoc();
	  $total = $user->num_rows;
	
		if(empty($_POST["username"] . $_POST["password"])){
			echo "Please input";
		} elseif($total > 0){
				$_SESSION['UserLogin'] = $row['username'];
				$_SESSION['Access'] = $row['access'];
				$_SESSION['UserLogin'];
				echo header("Location: index.php?username='$username'");
		} else { 
				echo "no match";
			}	
		}
	}
?>
<html>
	<head> 	
		<link rel="stylesheet" href="style.css">
	</head> 
	<body>
			<!-- c<br>
			<form action="" method="post">
				<label> Username </label>
				<input type="text" name="username" id="username">
				<label> Password </label>
				<input type="password" name="password" id="password">
				<button class="button" type="submit" name="login">Login</button>
			</form> -->
		<div class="login">
				<h1> LOG IN PAGE </h1>
			<div class="login-content">

				<form action="" method="post">
					<label> Username </label>
					<input type="text" name="username" id="username">
					<label> Password </label>
					<input type="password" name="password" id="password">
					<button class="button" type="submit" name="login">Login</button>
				</form>
			</div>
		</div>
	</body>
</html>