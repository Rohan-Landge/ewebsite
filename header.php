<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>


	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style type="text/css">
  .navbar-inverse{
    background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);
    border: none;
    border-radius: 0px;
    background-color: whitesmoke;


     .collapse li a span{
  color: black;
}

.collapse li a span:hover{
  color: whitesmoke;
}

 

  .carousel-caption h3,p{
    font-size: 50px;

  }
#BRAND{
  color: black;
}
#BRAND:hover{
  color: whitesmoke;
}



</style>

</head>
<body style="font-family: cursive;">

	<!-- Mnu bar start  -->
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" href="home.html" id="BRAND">
      	welcome <?php echo $_SESSION['name']?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li >
        <a href="home.php" ><span class="glyphicon glyphicon-home" >
        Home</a></li>
        <li><a href='profile.php'><span class="glyphicon glyphicon-user">
        Profile</a></li>
        <li><a href="history.php"><span class="glyphicon glyphicon-list">
        History</a></li>
        <li><a href="search.php"><span class="glyphicon glyphicon-search  ">
        Search</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-off">
        Logout</a></li>
      </ul>
      
    </div>
  </div>
</nav>
	<!-- Menu bar End -->