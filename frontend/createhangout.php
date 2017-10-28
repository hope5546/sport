<?php 
    require_once '../config/database.php';
    //var_dump($_GET); die();
    $topic = $_GET['topic'];
    $description = $_GET['description'];
    //$created_at = $_GET['created_at'];
   // $update_at = $_GET['update_at'];
    $sport_id = $_GET['sport_id'];
    $sportcomplex = $_GET['sportcomplex'];
    $started_at = $_GET['started_at'];
    $finished_at = $_GET['finished_at'];
    $maxjoin = $_GET['maxjoin'];
   // $createdby_id =$_GET['createdby_id'];
    $cost = $_GET['cost'];
    
    $sql = "INSERT INTO hangout (topic,description,sport_id,sportcomplex,maxjoin,cost,started_at,finished_at)
    VALUES ('$topic','$description','$sport_id','$sportcomplex','$maxjoin','$cost','$started_at','$finished_at');";
    
    mysqli_query($conn, $sql); 
   // header("Location : form_createhangout.php");
?>