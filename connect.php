<?php
$servername="localhost";
$username="root";
$password="";
$con = mysqli_connect("$servername","$username","$password");/*this is use for the connection to the server*/ /*server name   user name    password*/

if($con)
{
	mysqli_select_db($con,"ewebsite");
	/*echo "yes connect..";*/
	
}
?>