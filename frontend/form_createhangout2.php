<?php
    require_once('../config/database.php');

    $sql = "SELECT * FROM sport";

    $query_sport=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>สร้างห้อง</title>
    <?php require('../bootstrap/bootstrap.php');?>
</head>
<body>
    <?php require ('navbar.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="createhangout.php" method="get">


                            <label for="topic">ชื่อห้อง</label>
                            <input type="text" name="topic" class="form-control" placeholder="ชื่อห้อง"><br>
                            <label for="description">รายละเอียด</label>
                            <input type="text" name="description" class="form-control" placeholder="รายละเอียด"><br>
                            <label for="sport_id">ชนิดกีฬา</label>
                            <select name="sport_id">
                                <?php foreach ($query_sport as $key) :?>
                                <option value="<?= $key['id']?>" class="form-group"><?= $key['sport']?></option>
                                <?php endforeach;?>
                            </select><br>
                            <label for="sportcomplex">สถานที่ออกกำลังกาย</label>
                            <input type="text" name="sportcomplex" class="form-control" placeholder="พิมพ์ชื่อสถานที่"><br>
                            <label for="strated_at">เวลาเริ่มนัดหมาย</label>
                            <input type="text" name="started_at" class="form-control"><br>
                            <label for="finished_at">เวลาสิ้นสุดนัดหมาย</label>
                            <input type="text" name="finished_at" class="form-control"><br>
                            <label for="maxjoin">จำนวนผู้เข้าร่วมมากสุด</label>
                            <input type="integer" name="maxjoin" class="form-control"><br>
                            <label for="cost">ค่าใช้จ่าย</label>
                            <input type="integer" name="cost"  class="form-control"><br>
                            <div class="pull-right">
                                <button class="btn btn-success">Create</button>
                            </div>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>