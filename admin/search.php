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
	<title>User SEARCH Page</title>
	<?php include('../bootcdn.php');?>
</head>
<body>
	<?php include('header.php');?>

	<div class="container">

		<div class="well">
			<span class="glyphicon glyphicon-search"> <b>PRODUCT SEARCH PAGE</b></span>
		</div>

		<!-- Products list start section -->
		
		<div class="row hidden-print">
			<form method="post">
			<div class="col-sm-3">
				<input type="text" name="search" class="form-control" placeholder="product search here...">

				<br><br>

			</div>
			<div class="col-sm-1">
				<button type="submit" name="btn"  class="btn btn-danger" href="#">
					<span class="glyphicon glyphicon-search"> search</span>
				</button>
			</div>
		</form>
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
						if(isset($_POST['btn']))
						{
						$search = $_POST['search'];
						$sdata = mysqli_query($con,"SELECT * FROM products WHERE title LIKE '%".$search."%'");/*function query*/
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