<?php
    require_once ('../config/database.php');

    $hangout_id = $_GET['id'];
    $sql ="SELECT * FROM hangout WHERE hangout_id =$hangout_id";

    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <?php require('../bootstrap/bootstrap.php'); ?>
</head>
<body>

    <?php require ('navbar.php'); ?>

    <div class="contanier">
        <div class="col-md-12">
            <form>
                <h1>รายละเอียด</h1>
                <?=$result['topic']; ?><br>
                <?=$result['description']; ?><br>
                <?=$result['sport_id']; ?><br>
                <?=$result['sportcomplex']; ?><br>
                <?=$result['started_at']; ?><br>
                <?=$result['finished_at'];?><br>
                <?=$result['cost']; ?><br>
                <?=$result['maxjoin']; ?>
                <div class="pull-right">
                    <button class="btn btn-success">เข้าร่วม</button>
                    <a href="form_hangout.php" class="btn btn-info">ย้อนกลับ</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
