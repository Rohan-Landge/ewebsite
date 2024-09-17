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

		<div class="well hidden-print">
			<span class="glyphicon glyphicon-list"> <b>USER LIST PAGE</b></span>
		</div>

		<!-- user list start section -->
		<div class="row hidden-print">
			<div class="col-sm-3">
				<input type="text" id="myInput" class="form-control" placeholder="filter or search here..">

				<!-- boostrap filter start -->
				<script>
				$(document).ready(function(){
				  $("#myInput").on("keyup", function() {
				    var value = $(this).val().toLowerCase();
				    $("#myTable tr").filter(function() {
				      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				    });
				  });
				});
				</script>

				<!-- filter end -->

			</div>
			<div class="col-sm-1">
				<a onclick="print()" class="btn btn-danger" href="#">
					<span class="glyphicon glyphicon-print"> Print</span>
				</a>
			</div>
		</div>

		<!-- table start  -->
		<div class="table-responsive">
			<table class="table table-stripped table-hover table-bordered">
				<thead>
					<tr>
						<th>Student Id</th>
						<th>Registretion Date</th>
						<th>Student Name</th>
						<th>Contact No.</th>
						<th>Email ID</th>
						<th>Password</th>
					</tr>

					<tbody id="myTable">
						<?php
						$sdata = mysqli_query($con,"SELECT * FROM register ORDER BY id desc");/*function query*/
						while ($row=mysqli_fetch_assoc($sdata))/*assoc assosiative array*/ {
					
						?>
						<tr>
							<td><?php echo $row['id'] ?></td>
							<td><?php echo $row['rdate'] ?></td>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['contact'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><?php echo $row['pass'] ?></td>
						</tr>
						<tr>
							<?php
					     	}
							?>
						</tr>
					</tbody>

				</thead>
			</table>
			
		</div>
		<!-- table end -->
		

		<!-- user list end section -->


	</div>

</body>
</html>