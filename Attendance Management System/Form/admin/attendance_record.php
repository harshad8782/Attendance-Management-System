<html>
<head>
	<title>
		Attendance Records
	</title>
	<link rel="stylesheet" href="css/attendance-record.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<boby>
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

	$emp_id = $First_Name = $Last_Name = $time = $date = $attendance = "";
	$sql = "SELECT * FROM attendance;";
	$result = mysqli_query($conn, $sql);
	$rw = mysqli_num_rows($result);

	if ($rw > 0) 
	{ ?>
		<div class="abc">
			<h2>
				All Attendance Records<br>
		  </h2>
		  <p>
		<table>
	<tr>
		<th>Employee ID</th>
    	<th>First Name</th>
    	<th>Last Name</th>
    	<th>Time</th>
    	<th>Date</th>
    	<th>Attendances</th>
    </tr>
		<?php

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$emp_id = $row['emp_id'];
			$First_Name = $row['first_name'];
			$Last_Name = $row['last_name'];
			$time = $row['time'];
			$date = $row['date'];
			$attendance = $row['attenance'] 
			//echo $First_Name." ".$Last_Name." ".$email." ".$phone_no." ".$gender."<br>";
			?>
			<tr>
			<td><?php echo $emp_id;?></td>	
			<td><?php echo $First_Name;?></td>
    		<td><?php echo $Last_Name;?></td>
    		<td><?php echo $time;?></td>
    		<td><?php echo $date;?></td>
    		<td><?php echo $attendance;?></td>
    		</tr>
    	<?php
		}		
		?>
		</table></p>
	<?php
	}	
	?>
</div>

</body>
</html>