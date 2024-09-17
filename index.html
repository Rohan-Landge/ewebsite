<?php
session_start();
include('connect.php');

if(!empty($_SESSION['id']))
{
	header('location:home.php');
}

if (isset($_POST['login'])) {
	
	$user = $_POST['user'];
	$pass=$_POST['pass'];

	$sql=mysqli_query($con,"SELECT * FROM `register` WHERE (`contact` or `email` = '$user') && `pass` = '$pass'");
	$row = mysqli_num_rows($sql);

	while ($result=mysqli_fetch_assoc($sql))/*for seperation of the data*/
	{
		$_SESSION['id'] = $result['id'];
		$_SESSION['name'] = $result['name'];	
	}

	if($row>0)
	{
		echo "<script>
		alert('Yes login success..');
		window.location.href='home.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('invalid user or password');
		</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Login Page</title>
	<?php include('bootcdn.php');
	?>
	<style type="text/css">
		body{
			background-image: url('images/backimg3.png');
			/*background-attachment: fixed;*/
			background-size: cover;
		}

		/*.panel-default{
			background-color: rgba(0, 0, 0, 0.3);
		}
*/
	</style>
</head>
<body>

	<div class="container">
		<br><br><br><br>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4">

				<!-- userlogin form start -->
				<form method="post">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3>User Login</h3>
						</div>
						<div class="panel-body">
							<label>Username(Contact/Email)</label>
							<input type="text" name="user" class="form-control" placeholder="username" required>
							<br>
							<label>Password</label>
							<input type="password" name="pass" class="form-control" placeholder="password" required>		

						</div>
						<div class="panel-footer">
							<button type="submit" name="login" class="btn btn-success btn-block">Login</button>
								<br>
							<p>
								Go to <a href="admin/">Admin Panel</a>
							</p>
							<p>
								Not Register <a href="register.php">Sign up </a>here
							</p>
						</div>
					</div>
					
				</form>
				<!-- user login form end -->
				
			</div>
		</div>
	</div>

</body>
</html>
