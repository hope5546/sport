<?php
    require_once ('../config/database.php');
    //football
    $sql_football = "SELECT COUNT(id) FROM hangout WHERE sport_id=1";
    $query = mysqli_query($conn,$sql_football);
    $football = mysqli_fetch_array($query);
    //var_dump($query); die();
    //echo $football['COUNT(id)'];

    //basketball
    $sql_basketball = "SELECT COUNT(id) FROM hangout WHERE sport_id=2";
    $query = mysqli_query($conn,$sql_basketball);
    $basketball = mysqli_fetch_array($query);
    //var_dump($query); die();
    //echo $basketball['COUNT(id)'];

    //badminton
    $sql_badminton = "SELECT COUNT(id) FROM hangout WHERE sport_id=3";
    $query = mysqli_query($conn,$sql_badminton);
    $badminton = mysqli_fetch_array($query);

    //tennis
    $sql_tennis = "SELECT COUNT(id) FROM hangout WHERE sport_id=4";
    $query = mysqli_query($conn,$sql_tennis);
    $tennis = mysqli_fetch_array($query);

    //Running
    $sql_running = "SELECT COUNT(id) FROM hangout WHERE sport_id=5";
    $query = mysqli_query($conn,$sql_running);
    $running = mysqli_fetch_array($query);

    //Tabletennis
    $sql_tabletennis = "SELECT COUNT(id) FROM hangout WHERE sport_id=6";
    $query = mysqli_query($conn,$sql_tabletennis);
    $tabletennis = mysqli_fetch_array($query);

    //Bicycle
    $sql_bicycle = "SELECT COUNT(id) FROM hangout WHERE sport_id=7";
    $query = mysqli_query($conn,$sql_bicycle);
    $bicycle = mysqli_fetch_array($query);

    //Volleyball
    $sql_volleyball = "SELECT COUNT(id) FROM hangout WHERE sport_id=8";
    $query = mysqli_query($conn,$sql_volleyball);
    $volleyball = mysqli_fetch_array($query);





?>