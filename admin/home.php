<?php
session_start();/*for telling the is going*/
include('../connect.php');

if(empty($_SESSION['aname']))
{
	header('location:index.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Home Page</title>
	<?php include('../bootcdn.php');?>
</head>
<body>
	<?php include('header.php');?>

	<div class="container">

		<div class="well">
			<span class="glyphicon glyphicon-home"> <b>HOME PAGE</b></span>
		</div>

		<!-- dashboard start  -->

		<div class="row">
			<h4>Users:-</h4>
			<div class="col-sm-3">
				<div class="well text-center">
					<span style="font-size: 30px;" class="glyphicon glyphicon-user"></span>
					<?php
					$sql = mysqli_query($con,"SELECT * FROM register ");
					$result = mysqli_num_rows($sql);
					?>
					<h4>TotalUsers - <?php echo $result ?></h4>
				</div>
			</div>

			<div class="row">

			<div class="col-sm-3">
				<div class="well text-center">
					<span style="font-size: 30px;" class="glyphicon glyphicon-time"></span>
					<?php
					$sql = mysqli_query($con,"SELECT * FROM register WHERE rdate = '".date('Y-m-d')."' ");
					$result = mysqli_num_rows($sql);
					?>
					<h4>TodaysUsers - <?php echo $result ?></h4>
				</div>
			</div>

		</div>


		<div class="row">
			<h4>Products:-</h4>
			<div class="col-sm-3">
				<div class="well text-center">
					<span style="font-size: 30px;" class="glyphicon glyphicon-th"></span>
					<?php
					$sql = mysqli_query($con,"SELECT * FROM products ");
					$result = mysqli_num_rows($sql);
					?>
					<h4>TotalProducts - <?php echo $result ?></h4>
				</div>
			</div>

			<div class="row">

			<div class="col-sm-3">
				<div class="well text-center">
					<span style="font-size: 30px;" class="glyphicon glyphicon-time"></span>
					<?php
					$sql = mysqli_query($con,"SELECT * FROM products WHERE udate = '".date('Y-m-d')."' ");
					$result = mysqli_num_rows($sql);
					?>
					<h4>TodaysProducts - <?php echo $result ?></h4>
				</div>
			</div>

		</div>

		<div class="row">
			<h4>purchase:-</h4>
			<div class="col-sm-3">
				<div class="well text-center">
					<span style="font-size: 30px;" class="glyphicon glyphicon-list-th"></span>
					<?php
					$sql = mysqli_query($con,"SELECT * FROM purchase ");
					$result = mysqli_num_rows($sql);
					?>
					<h4>TotalPurchase - <?php echo $result ?></h4>
				</div>
			</div>

			<div class="row">

			<div class="col-sm-3">
				<div class="well text-center">
					<span style="font-size: 30px;" class="glyphicon glyphicon-time"></span>
					<?php
					$sql = mysqli_query($con,"SELECT * FROM purchase WHERE pdate = '".date('Y-m-d')."' ");
					$result = mysqli_num_rows($sql);
					?>
					<h4>TodaysPurchase - <?php echo $result ?></h4>
				</div>
			</div>

		</div>

		<!-- dashboard end -->
		
	</div>

</body>
</html>