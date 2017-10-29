<?php
    session_start();
//    if($_SESSION['id']==""){
//
//        alert("กรุณาเข้าสู่ระบบ");
//
//    }
    require_once ('../config/database.php');
    require_once ('num_hangout.php');
    $status = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php require('../bootstrap/bootstrap.php'); ?>
</head>
<body>


    <div class="container" style="padding-top: 0px">


        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/soccer.png" width="30%" alt="soccer">

                    <div class="caption">
                        <h3>Soccer</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$football['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?php echo '1'?>&status=<?=$status ?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>



                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-8 col-md-4">
                <div class="thumbnail">

                    <img src="../images/logo/basketball.png" width="30%" alt="basketball">

                    <div class = "caption">
                        <h3>Basketball</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$basketball['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?= '2'?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-sm8-8 col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/badminton.png" width="30%" alt="badminton">

                    <div class = "caption">
                        <h3>Badmintion</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$badminton['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?= '3'?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm8-8 col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/tennis.png" width="30%" alt="tennis">
                    <div class="caption">
                        <h3>Tennis</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$tennis['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?= '4'?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-8 col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/running.png" width="30%" alt="running">

                    <div class="caption">
                        <h3>Running</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$running['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?= '5'?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="col-xs-12 col-sm-8 col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/tabletennis.png" width="30%" alt="tabletennis">
                    <div class="caption">
                        <h3>Tabletennis</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$tabletennis['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?= '6'?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/bicycle.png" width="30%" alt="bicycle">
                    <div class="caption">
                        <h3>Bicycle</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$bicycle['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?= '7' ?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-sm-8 col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/volleyball.png" width="30%" alt="volleyball">
                    <div class="caption">
                        <h3>Volleyball</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$volleyball['COUNT(hangout_id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?= '8' ?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-4">
                <div class="thumbnail">
                    <!--                         <div class="panel-body"><img src="" width="100%" alt="""> -->
                    <a>
                        <div>
                            <div class="empty">All sports</div>
                        </div>
                    </a>
                    <!--                         </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>