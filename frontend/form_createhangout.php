<?php 
	require_once('../config/database.php');

	$sql = "SELECT * FROM sport";

	$query_sport=mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ROOM</title>
	<link rel="stylesheet" media="all" type="text/css" href="jquery-ui.css" />
<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />

<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>

<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>
</head>
<body>
	<div class="container">
	<form action="createhangout.php" method="GET">
		<label>ชื่อห้อง</label>
		<input class="form-control" type="text" name="topic"><br>
		<label>รายละเอียด</label>
		<input type="text" name="description"><br>
		<label>กีฬา</label>

		
		<select name="sport_id">
			<?php foreach ($query_sport as $key) :?>
				<option value ="<?= $key['id']  ?>"><?= $key['sport']  ?></option>
			 <?php endforeach ; ?>
			
		</select><br>


		<label>สถานที่</label>
		<input type="text" name="sportcomplex"><br>
<!-- 		<label>เวลาเริ่ม</label><br>        -->
<!-- 		<input type="text" name="started_at">          -->
<script type="text/javascript">
 
$(function(){
$("#dateInput").datetimepicker({
dateFormat: 'dd-M-yy',
timeFormat: "HH:mm"
});
});
</script>
<input type="text" name="dateInput" id="dateInput" value="" />
		<label>ถึงเวลา</label><br>
		<label>จำนวนคน</label>
		<input type="integer" name="maxjoin"><br>
		<label>ค่าใช้จ่าย</label>
		<input type="integer" name="cost"><br>
		<button>submit</button>
		
	</form>
	</div>

   
</body>
</html>

