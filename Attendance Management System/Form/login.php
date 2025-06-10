<html>
<head>
	<title>
		LOGIN
	</title>
	<style>
	.error {color: red};
	</style> 
	<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
	<?php

	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "form";
	$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

	if(!$conn)
	{
		echo("Sorry connection fail");
	}

	$email = $pass = $role = $Err = "";
	$emailErr = $PasswordErr = $roleErr = "";
	if (isset($_POST['Login']))
	{
		if(empty($_POST["email"]))
		{
			$emailErr = "*";
			$Err = "* Required Field";
		}
		else
		{
			$email = $_POST['email'];
		}

		if(empty($_POST["Password"]))
		{
			$PasswordErr = "*";
			$Err = "* Required Field";
		}
		else
		{
			$pass = $_POST['Password'];
		}

		if(empty($_POST["role"]))
		{
			$roleErr = "*";
			$Err = "* Required Field";
		}
		else
		{
			$role = $_POST['role'];
		}

	}

		if (!empty($_POST['email']) && !empty($_POST['Password']) && !empty($_POST['role']))
		{
			if ($_POST['role'] == "Admin") 
			{
				$sql = mysqli_query($conn, "SELECT count(*) as total from admin where email = '".$email."' and password = '".$pass."' ") or die(mysqli_error($conn));
				$rw = mysqli_fetch_array($sql);

				if ($rw['total'] > 0) 
				{
					echo "string";
			 		echo "<script>alert('Username and Password are Correct')</script>";
			 		session_start();
			 		$_SESSION['email'] = $email;
			 		header("Location: admin/adminhome.php");
				} 
				else
				{
					echo "<script>alert('Username or Password is Incorrect')</script>";
				}
			}
			else
			{
				echo "emp";
				$sql = mysqli_query($conn, "SELECT count(*) as total from user where email = '".$email."' and password = '".$pass."' ") or die(mysqli_error($conn));
				$rw = mysqli_fetch_array($sql);

				if ($rw['total'] > 0) 
				{
			 		echo "<script>alert('Username and Password are Correct')</script>";
			 		session_start();
			 		$_SESSION['email'] = $email;
			 		header("Location: user/home.php");
				} 
				else
				{
					echo "<script>alert('Username or Password is Incorrect')</script>";
				}
			}
			
		}
		
	
	?>

	<form class="contains" method="post" action = "<?php ($_SERVER['PHP_SELF']);?>" >
		<img src="img/logo.png">
	<h1>
		LOGIN
		<p><span class="error"> <?php echo $Err;?><br><br></span></p>
	</h1>
	<p1>
		E-mail ID <br><input type="text" name="email"  placeholder="Enter E-mail-ID">
		<span class="error"> <?php echo $emailErr;?></span>
		<br>
		Password <br><input type="password" name="Password" placeholder="Enter Password">
		<span class="error"> <?php echo $PasswordErr;?></span>
		<br>
		Role <br>
		<input type="radio" name="role" value ="Admin"> Team Leader
		<input type="radio" name="role" value="Employee"> Employee
		<span class="error"> <?php echo $roleErr;?></span>
	    <br><br>
	</p1>
	<br>
	<input type="submit" name="Login" value="Login" > <br><br>	
	<!--Don't have Account, Click here <a href="register.php" target="blank">SignUp</a>-->
	</form> 
</body>
</html>
