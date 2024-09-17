<?php
session_start();/*for telling the is going*/
include('connect.php');
if(empty($_SESSION['id']))
{
	header('location:index.php');
}

if(isset($_POST['btn1']))
{
	$pdate = $_POST['pdate'];
	$uid = $_POST['uid'];
	$uname = $_POST['uname'];
	$proid = $_POST['proid'];

	mysqli_query($con,"INSERT INTO purchase(pdate,uid,uname,proid) VALUES('$pdate','$uid','$uname','$proid')");

	echo "<script>
	alert('successfully purcase the product');
	window.location.href='search.php';
	</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User SEARCH Page</title>
	<?php include('bootcdn.php');?>
</head>
<body>
	<?php include('header.php');?>

	<div class="container">

		<div class="well">
			<span class="glyphicon glyphicon-search"> <b>SEARCH PAGE</b></span>
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
						<th>Action</th>
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
								<img src="<?php echo 'admin/imgs/'.$row['photo'] ?>" width="80px">	
							</td>
							<td><?php echo $row['price'] ?></td>

							
							<td>
								<form method="post">
									<!-- hidden inputs start -->
									<input type="hidden" name="pdate" value="<?php echo date('Y-m-d') ?>">

									<input type="hidden" name="uid" value="<?php echo $_SESSION['id'] ?>">

									<input type="hidden" name="uname" value="<?php echo $_SESSION['name'] ?>">

									<input type="hidden" name="proid" value="<?php echo $row['pid'] ?>">
									<!-- hidden inputs end --><br><br>

									<button type="submit" name="btn1" class="btn btn-primary">Purchase</button>
								</form>
							</td>

						</tr>

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