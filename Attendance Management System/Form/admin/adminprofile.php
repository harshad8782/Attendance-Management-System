<html>
<head>
	<title>
		Admin Profile
	</title> 
	<link rel="stylesheet" type="text/css" href="css/admin-profile.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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

	$id = $First_Name = $Last_Name = $email = $phone_no = $gender = ""; 
	session_start();
	$user = $_SESSION['email'];

	$sql = "SELECT emp_id, first_name, last_name, email, phone_no, gender FROM admin WHERE email = '$user';";
	$result = mysqli_query($conn, $sql);
	$rw = mysqli_num_rows($result);

	if ($rw > 0) 
	{
		while ($row = mysqli_fetch_assoc($result)) 
		{
			$id = $row['emp_id'];
			$First_Name = $row['first_name'];
			$Last_Name = $row['last_name'];
			$email= $row['email'];
			$phone_no = $row['phone_no'];
			$gender = $row['gender'];
		}
	}
		
?>
	<div class="wrapper">
	<div class="sidebar">
        <h2>Dashboard</h2>
        <nav class="main-nav">
            <ul class="main-nav-ul">
                <li><a href="adminhome.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="adminprofile.php"><i class="fas fa-user"></i>Profile</a></li>
                
                <li><a href="#"><i class="fas fa-address-book"></i>Employees<span class="sub-arrow"></span></a>
            
                    <ul>
                        <li><a href="register.php"><i class="fas fa-user-plus"></i>Add Employee</a></li>
                        <li><a href="attendance_record.php"><i class="fas fa-clipboard"></i>Attendance Records</a></li>
                        <li><a href="employees.php"><i class="fas fa-users"></i>Show All Employee</a></li>
                    </ul>
                </li>
      
                <li><a href="addadmin.php"><i class="fas fa-plus-square"></i>Add Team Leader</a></li>
                <li><a href="../login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            </nav>
    </div>
	</div>

	<div class="abc">
		<h2>
			<?php echo $First_Name." ".$Last_Name.","; ?><br>
		</h2>
		<p>
			<br>
			Your Employee ID is: <?php echo $id; ?><br> 
			Your Phone Number is: <?php echo $phone_no; ?><br>
			Your email address is: <?php echo $email; ?><br>
			Gender is: <?php echo $gender; ?>
		</p>
	</div>
</body>
</html>
