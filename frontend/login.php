<?php 
		require_once('../config/database.php');
		session_start();
		$strUser = $_POST['username'];
		$strPassword = md5($_POST['password']);
		//var_dump($strPassword); die();
		
		$sql = "SELECT * FROM user where username = '".$strUser."' and password = '".$strPassword."'";
		$objQuery = mysqli_query($conn, $sql);
		$objResult = mysqli_fetch_array($objQuery);
		
		if(!$objResult){
		    header("location:form_login.php");
		}
		else{
		    $_SESSION['id'] = $objResult['id'];
		    session_write_close();
		    header("location:index_user.php");
		}
		
		mysqli_close();

// 		$sql = "SELECT * FROM user WHERE username = '".md5($_POST['username'])."'";

// 		$result = $conn->query($sql);

// 			if($obj=$result->fetch_object()){
// 				if($obj->password == md5($_POST['password'])){
// 					echo "<meta http-equiv=\"refresh\" contebt=\"2; URL='index.php'\">";
// 				}else{
// 					echo "ERROR";
// 				}
// 			}else{
// 				echo "ERROR";
// 			}
// 		$conn->close();
 ?>