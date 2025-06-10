<?php
session_start();
$Email_ID = $_SESSION['email'];
$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "form";
    $cookie = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql_emp = "SELECT * FROM `user` WHERE `email` LIKE '$Email_ID'";
    $result_emp = mysqli_query($conn, $sql_emp);

    $row = mysqli_fetch_assoc($result_emp);
    $Employee_ID = $row['emp_id'];

    $cookie_name = $Employee_ID;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(!isset($_COOKIE[$cookie_name]))
    {
        setcookie($cookie_name,"set", time() + 60, "/");
    }
}
?>

<!doctype html>
<html>
<head>
    <title>
        Mark Attendance
    </title>
<link rel="stylesheet" href="css/mark_attendance.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>

    </style>
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

    $emp_id = $First_Name = $Last_Name = ""; 
    //session_start();
    $user = $_SESSION['email'];
    $sql = "SELECT emp_id, first_name, last_name FROM user WHERE email = '$user';";
    $result = mysqli_query($conn, $sql);
    $rw = mysqli_num_rows($result);

    if ($rw > 0) 
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $emp_id = $row['emp_id'];
            $First_Name = $row['first_name'];
            $Last_Name = $row['last_name'];
        }
    } 

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "form";
    $conn1 = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    if(!$conn1)
    {
        echo("Sorry connection fail");
    }

    $Date = $Time = $out = "";
    $msg = "Your Attendance is Marked,";
    date_default_timezone_set("Asia/Calcutta");
    $Date = date("Y-m-d");
    $Time = date("H:i:s");
    if ($_SERVER['REQUEST_METHOD'] == 'POST')    
    {
        if (!isset($_COOKIE[$cookie_name])) 
        {
            $sql1 = "INSERT INTO `attendance` (`emp_id`, `first_name`, `last_name`, `time`, `date`, `attenance`) VALUES ( '$emp_id', '$First_Name', '$Last_Name', '$Time', '$Date', 'P');";
            $result = mysqli_query($conn1, $sql1);
            if ($result)
            {
                echo "<script>alert('Attendance Marked')</script>";
            }
            $out = $msg."<br>Date:".$Date."<br>Time:".$Time;
        }
    }
?>

<div class="wrapper">
    <div class="sidebar">
        <h2>Dashboard</h2>
            <nav class="main-nav">
	        <ul class="main-nav-ul">
   	            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="mark_attendance.php"><i class="fas fa-address-card"></i>Mark Attendance</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Employees<span class="sub-arrow"></span></a>
      	    
                    <ul>
                        <li><a href="record.php"><i class="fas fa-clipboard"></i>Attendance Records</a></li>
                        <li><a href="all-emp.php"><i class="fas fa-users"></i>Show All Employee</a></li>
                    </ul>
                </li>
      
                <li><a href="../login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            </nav>
    </div>
    <div class="main_content">
        <div class="header">
            <h2>Mark Attendance</h2>
        </div>  
    </div>
</div>


<div class="abc">
        <p>
            <br>
            <?php echo $First_Name." ".$Last_Name.","."<br>"."To Mark Your Today's Attendace Click On Button.";?><br>
            <br>
            <div class="msg">
                <form method="Post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <input type="submit" name="Present" value="Present">
                    <p>
                        <br>
                        <?php
                        echo $out; 
                        ?>
                    </p>
                </form>
            </div>
        </p>
</div>

</body>
</html>