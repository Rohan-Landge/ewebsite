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
			<span class="glyphicon glyphicon-list"> <b>Products LIST PAGE</b></span>
		</div>

		<!-- Products list start section -->
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
				<br><br>

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
						<th>Product Id</th>
						<th>Upload Date</th>
						<th>Product Title</th>
						<th>Product Discription</th>
						<th>Product Photo</th>
						<th>Product Price</th>
					</tr>

					<tbody id="myTable">
						<?php
						$sdata = mysqli_query($con,"SELECT * FROM products ORDER BY pid desc");/*function query*/
						while ($row=mysqli_fetch_assoc($sdata))/*assoc assosiative array*/ {
					
						?>
						<tr>
							<td><?php echo $row['pid'] ?></td>
							<td><?php echo $row['udate'] ?></td>
							<td><?php echo $row['title'] ?></td>
							<td><?php echo $row['description'] ?></td>
							<td>
								<img src="<?php echo 'imgs/'.$row['photo'] ?>" width="80px">	
							</td>
							<td><?php echo $row['price'] ?></td>
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
		

		<!-- Product list end section -->


	</div>

</body>
</html>