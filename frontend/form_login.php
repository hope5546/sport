<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<?php require('../bootstrap/bootstrap.php');?>

    <style>
        .body_blue{
            background: dodgerblue;
            box-shadow: 5px 5px 10px 10px rgba(50,50,50,.4);
            color : #FFFFFF;
        }
    </style>

</head>
<body>
    <?php require ('navbar.php');?>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body body_blue"><h1 class="text-center">Login</h1></div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="login.php" method="POST">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">	<br>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"> <br>
                    <div class="pull-right">
                        <button class="btn btn-success" type="submit">Login</button>
<!--                        <a  class="btn btn-primary" href="index.php">Back</a>-->
                    </div>

                </form>
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>







</body>
</html>