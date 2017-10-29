<?php
session_start();
if($_SESSION['id'] == "")
{
    header("location:form_login.php");
    exit();
}

// if($_SESSION['Status'] != "admin")
// {
//     echo "Homepage_admin";
//     exit();
// }

require '../config/database.php';
$strSQL = "SELECT * FROM user WHERE id = '".$_SESSION['id']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <!--                <img src="../images/logo/logo.png" alt="Logo" style="width:20px;">-->
                MeetingofSports
            </a>
        </div>
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span>Location</a></li>
            <!-- <li><a href="#">Page 2</a></li> -->
            <li><a href="form_register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><?=$objResult['username']; ?></a></li>
        </ul>

    </div>
</nav>
     <?php require ('main.php');?>
</body>
</html>


