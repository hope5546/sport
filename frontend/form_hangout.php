<?php
    require_once('../config/database.php');
    $id = $_GET['id'];


    $sql = "SELECT * FROM hangout INNER JOIN sport ON hangout.sport_id = sport.id  WHERE hangout.sport_id = $id";
    $query_hangout=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>hangout</title>
    <?php require ('../bootstrap/bootstrap.php'); ?>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail">
                <table class="table table-stripe">
                    <tbody>
                    <?php foreach ($query_hangout as $key) :?>
                    <td><?= $key['topic'];?></td>
                    <td><?= $key['description']; ?></td>
                    <td><?= $key['sport']; ?></td>
                    <td><?= $key['sportcomplex'];?></td>
                    <td><?= $key['started_at']; ?></td>
                    <td><?= $key['finished_at'];?></td>
                    <td><?= $key['maxjoin'];?></td>
                    <td><?= $key['cost'];?></td>

                    <tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>







            </div>
        </div>
    </div>
</body>
</html>
