<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.border{
			border: 1px solid #000000;
		}
		.table{
			text-align: center;
		}
		th{
			text-align: center;
		}
		h2{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Hello, Council Members</h3>
		<h2>Club Meeting Details</h2>
		<table class="table table-striped" border="1">
		    <thead>
		      <tr>
		        <th>Meeting Type</th>
		        <th>Meeting No.</th>
		        <th>Meeting Date</th>
		        <th>Attendance</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php

		    	for ($i=0; $i < count($meetings); $i++) {
		    ?>
		    	<tr>
		    		<th><?php echo $meetings[$i]['type']; ?></th>
		    		<th><?php echo $meetings[$i]['meetingNo']; ?></th>
		    		<th><?php echo $meetings[$i]['meetingDate']; ?></th>
		    		<th><?php echo $meetings[$i]['meetingAttendance']; ?></th>
		    	</tr>
		    <?php		
		    	}

		    ?>
		</table>
		<h3>Thanks,</h3>
		<h3><?php echo  $meetings[0]['clubName']; ?></h3>
	</div>
</body>
</html>