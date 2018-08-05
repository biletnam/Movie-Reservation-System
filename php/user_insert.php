<?php
$first=$_POST['form_firstname'];
$last=$_POST['form_lastname'];
$username=$_POST['form_email'];
$password=$_POST['form_password'];
$conn=mysqli_connect("localhost","root","","online_movies");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
  $sql="INSERT INTO `users`(`first_name`,`last_name`,`username`,`password`)VALUES('$first','$last','$username','$password')";
  if(mysqli_query($conn,$sql))
	{
				header("Location:signup3.php");
				
	}
	else
	{
		echo "<h1 align='center'>Failure!!!Sorry,Retry</h1><br/>";
	}
?>