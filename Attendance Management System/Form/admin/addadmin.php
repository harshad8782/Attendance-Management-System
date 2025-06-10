<html>
<head>
	<title>Add Team Leader</title>
    <style>
        .error {color: red};
    </style> 
	<link rel="stylesheet" href="css/add-admin.css">
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


    $emp_id = $first = $last = $pass = $phone = $mail = $gen = $Err = "";
    $First_NameErr = $Last_NameErr =$emp_idErr = $passwordErr = $phone_noErr = $emailErr = $genderErr = "";
    if (isset($_POST['Submit']))
    {
        if(empty($_POST["emp_id"]))
        {
            $emp_idErr = "*"; 
            $Err = "* Required Field";
        }
        else
        {
            $emp_id = $_POST['emp_id'];
        }
        
        if(empty($_POST["First_Name"]))
        {
            $First_NameErr = "*";
            $Err = "* Required Field";
        }
        else
        {
            $first = $_POST['First_Name'];
        }

        if(empty($_POST["Last_Name"]))
        {
            $Last_NameErr = "*";
            $Err = "* Required Field"; 
        }
        else
        {
            $last = $_POST['Last_Name'];
        }

        if(empty($_POST["phone_no"]))
        {
            $phone_noErr = "*";
            $Err = "* Required Field";
        }
        else
        {
            $phone = $_POST['phone_no'];
        }

        if(empty($_POST['email']))
        {
            $emailErr = "*";
            $Err = "* Required Field";
        }
        else
        {
            $mail = $_POST['email'];
        }

        if(empty($_POST["password"]))
        {
            $passwordErr = "*";
            $Err = "* Required Field"; 
        }
        else
        {
            $pass = $_POST['password'];
        }

        if (empty($_POST['gender']))
        {
            $genderErr = "*";       
            $Err = "* Required Field";  
        }
        else
        {
            $gen = $_POST['gender'];
        }
    }

    if (!empty($emp_id) && !empty($first) && !empty($last) && !empty($phone) && !empty($mail) && !empty($pass) && !empty($gen))
    {
        $sql = "INSERT INTO `admin` (`emp_id`, `first_name`, `last_name`, `phone_no`, `email`, `password`, `gender`) 
        VALUES ('$emp_id', '$first', '$last', '$phone', '$mail', '$pass', '$gen');";
        mysqli_query($conn, $sql);

        echo "<script>alert('Team Leader Add Successful')</script>";
    }

    ?>


<div class="wrapper">
    <div class="sidebar">
        <h2>Dashboard</h2>
            <nav class="main-nav">
            <ul class="main-nav-ul">
                <li><a href="adminhome.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="adminprofile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="attendance_record.php"><i class="fas fa-clipboard"></i>Attendance Records</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Employees<span class="sub-arrow"></span></a>
            
                    <ul>
                        <li><a href="register.php"><i class="fas fa-user-plus"></i>Add Employee</a></li>
                        <li><a href="employees.php"><i class="fas fa-users"></i>Show All Employee</a></li>
                    </ul>
                </li>

                <li><a href="addadmin.php"><i class="fas fa-plus-square"></i>Add Team Leader</a></li>
                <li><a href="../login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            </nav>
    </div>
    <div class="main_content">
        <div class="header">
            <h2>Add Team Leader</h2>
        </div>  
    </div>
</div>

<form class="contains" method="post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
            <p>
                <span class="error">
                    <?php echo $Err;?>
                </span>
                <br>
            </p>
        <p1>
            First Name <br><input type="text" name="First_Name" placeholder="Enter First Name">
            <span class="error"> <?php echo $First_NameErr;?></span>
            <br>
            Last Name <br><input type="text" name="Last_Name" placeholder="Enter Last Name">
            <span class="error"> <?php echo $Last_NameErr;?></span>
            <br>
            Employee ID <br><input type="text" name="emp_id" placeholder="Enter Employee ID">
            <span class="error"> <?php echo $emp_idErr;?></span>
            <br>
            E-mail ID <br><input type="text" name="email" placeholder="Enter E-mail ID">
            <span class="error"> <?php echo $emailErr;?></span>
            <br>
            Password <br><input type="password" name="password" placeholder="Enter Password">
            <span class="error"> <?php echo $passwordErr;?></span>
            <br>
            Phone Number <br><input type="text" name="phone_no" placeholder="Enter Phone Number">
            <span class="error"> <?php echo $phone_noErr;?></span>
            <br>
            Gender <br>
            <input type="radio" name="gender" value ="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <span class="error"> <?php echo $genderErr;?></span>
            <br><br>
            <center>
            <input type="Submit" name="Submit" value="Submit" >
        </p1>
        </form>

</body>
</html>