<?php
//    if($_GET['status']==0){
//        //alert("sdsdsds");
//        header("Location:index.php");
//    }else{
//        echo "sdsds";
//    }
    //var_dump($_GET['status']); die();
    require_once('../config/database.php');
    $id = $_GET['id'];
    //echo $id; die();
    $sql = "SELECT * FROM hangout INNER JOIN sport ON hangout.sport_id = sport.sport_id  WHERE hangout.sport_id = $id";
//SELECT hangout.id ,hangout.topic FROM hangout INNER JOIN sport ON hangout.sport_id = sport.id  WHERE hangout.sport_id = 1
    $query_hangout=mysqli_query($conn,$sql);



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>hangout</title>
    <?php require ('../bootstrap/bootstrap.php'); ?>
    <style>
        .glyphicon_color{
            color: dodgerblue;
        }
    </style>
</head>
<body>
    <?php require ('navbar.php');?>


    <div class="container">
        <div class="row">
            <?php foreach ($query_hangout as $key) : ?>
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">1/20</div>
                    <div class="panel-body">
                        <p>
                            <span class="glyphicon glyphicon-bookmark glyphicon_color"></span>&nbsp;&nbsp;<?=$key['topic'];?><br>
                            <span class="glyphicon glyphicon-time glyphicon_color"></span>&nbsp;&nbsp;<?=$key['started_at']; ?><br>
                            <span class="glyphicon glyphicon-time glyphicon_color"></span>&nbsp;&nbsp;<?=$key['finished_at']; ?><br>
                            <span class="glyphicon glyphicon-send glyphicon_color"></span>&nbsp;&nbsp;<?=$key['sportcomplex']; ?>

                        </p>
                        <a href="joinhangout.php?id=<?=$key['hangout_id']; ?>" class="btn btn-success">เข้าร่วม</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div> <!--end container-->
</body>
</html>
