<?php
session_start();

if(isset($_POST['login']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if($user=='Admin' && $pass=='admin123')
	{
		$_SESSION['aname'] = $user;
		header('location:home.php');
	}
	else
	{
		echo "<script>
		alert('invalid Entry..');
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login Page</title>
	<?php include('../bootcdn.php');
	?>
	<style type="text/css">
		body{
			background-image: url('../images/backimg3.png');
			/*background-attachment: fixed;*/
			background-size: 100%;
			background-image: ;
		}

		/*.panel-success{
			background-color: rgba(0, 0, 0, 0.2);
		}*/

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
							<h3>Admin Login</h3>
						</div>
						<div class="panel-body">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="username" required>
							<br>
							<label>Password</label>
							<input type="password" name="pass" class="form-control" placeholder="password" required>		

						</div>
						<div class="panel-footer">
							<button type="submit" name="login" class="btn btn-success btn-block">Login</button>
								<br>
							<p>
								Go to <a href="../">User Panel</a>
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