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
     <?php require ('main.php');?>
</body>
</html>


