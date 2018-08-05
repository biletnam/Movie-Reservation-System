<?php
session_start();
?>

<?php

$username=$_POST['form_username'];
$password=$_POST['form_password'];

$conn=mysqli_connect("localhost","root","","online_movies");
if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	else{
	$sql="select * from users where username='$username'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0){
	$_SESSION['user']=$row['userid'];
	if($password==$row['password']){
			header("Location:check.php");
		}
		else{
			header("Location:signup3.php?invalid=true");
		}
	}
	 else
		 header("Location:signup3.php?exist=true");
	}
	
?>