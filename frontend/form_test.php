<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hangout</title>
<!--    --><?php //require '../../config/connectDB.php' ?>
    <?php require '../bootstrap/bootstrap.php'?>
</head>
<body>
<!-- navbar -->
<nav  class="navbar navbar-expand-sm bg-primary navbar-dark">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
        </li>
    </ul>

</nav>
<!-- end navbar -->
<div class="container">
    <form action="insert.php" method="get" >
        <div class="row">
            <div class="col-md-5">
                <br>
                <h1> Hangout</h1>
                <input type="text" name="description" class="form-control" placeholder="รายละเอียด">
                <br>
                <input type="submit" name="btn_submit" class="btn btn-outline-success">
                <input type="text" name="created_at" class=>
            </div>
        </div>


    </form>
</div>


</body>
</html>