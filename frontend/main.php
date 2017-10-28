<?php
    require_once ('../config/database.php');
    require_once ('num_hangout.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php require('../bootstrap/bootstrap.php'); ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">MeetingofSports</a>
        </div>
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span>Location</a></li>
            <!-- <li><a href="#">Page 2</a></li> -->
            <li><a href="form_register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="form_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>

    </div>
    </nav>

    <div class="container" style="padding-top: 0px">


        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-4">
                <div class="thumbnail">
                    <img src="../images/logo/soccer.png" width="30%" alt="soccer">

                    <div class="caption">
                        <h3>Soccer</h3>
                        <div class="row">
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$football['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
                            <div class="col-md-3"><a href="form_hangout.php?id=<?php echo '1'?>"><button class="btn btn-success">เข้าร่วม</button></a></div>
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
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$basketball['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
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
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$badminton['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
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
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$tennis['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
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
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$running['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
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
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$tabletennis['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
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
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$bicycle['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
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
                            <div class="col-md-9"><h4><span class="label label-primary"><?=$volleyball['COUNT(id)']; ?> ห้องทั้งหมด</span></h4></div>
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