<?php
    require_once ('../config/database.php');

    $sql = "SELECT * FROM  hangout INNER JOIN sport ON hangout.sport_id = sport.id WHERE hangout.sport_id =1";

    $query_hangout=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <!-- Minified Bootstrap CSS -->
    <?php require ('../bootstrap/bootstrap.php'); ?>
    <?php require ('../bootstrap/bootstrap4.php');?>
    <style>
        .text_white{
            color: #ffffff;
        }
    </style>

</head>

<body>
<!--    --><?php //require ('navbar.php');?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="../images/logo/logo.png" alt="Logo" style="width:60px;">
        Meeting of Sports
    </a>

    <!-- Links -->
    <ul class="navbar-nav">

    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><span class="glyphicon glyphicon-map-marker"></span>Location</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form_register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form_login.php"><span class="glyph"></span>Login</a>
        </li>
    </ul>

</nav>


<!--    <div class="container">-->
<!--        <div  class="row" >-->
<!--            --><?php //foreach ($query_hangout as $key) :?>
<!--            <div class="col-md-2">-->
<!--                <div class="panel panel-info">-->
<!--                    <div class="panel-heading">1/20</div>-->
<!--                    <div class="panel-body">-->
<!--                        <p>-->
<!--                            --><?//=$key['topic']; ?><!--<br>-->
<!--                            --><?//=$key['started_at']; ?><!--<br>-->
<!--                            --><?//=$key['finished_at']; ?><!--<br>-->
<!--                            --><?//=$key['sportcomplex'];?>
<!--                        </p>-->
<!--                       <a href="joinhangout.php?id=--><?//=$key['id'];?><!--" class="btn btn-warning">JOIN</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            --><?php //endforeach; ?>
<!--        </div>-->
<!---->
<!---->
<!--   </div> <!-- end container-->
</body>
</html>


