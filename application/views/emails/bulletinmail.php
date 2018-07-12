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
			width: 80%;
			margin: auto;
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
		<h2>Club Bulletin Details</h2>
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Bulletin Name</th>
		        <th>Bulletin date</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td><?php echo $bulletinName; ?></td>
		        <td><?php echo $bulletinDate; ?></td>
		      </tr>
		    </tbody>
		</table>
		<h4>Plesase find the attachment below.</h4>
		<h3>Thanks,</h3>
		<h3><?php echo $clubName; ?></h3>
	</div>
</body>
</html>