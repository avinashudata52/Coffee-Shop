<?php
session_start();
include("config.php");
if(isset($_SESSION['login_user']))
{
	header("location:home.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$pass=md5($_POST['pass']);//Encrypted Pass
	$sql="SELECT id FROM info WHERE name='$name' and pass='$pass'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	
	
	$count=mysqli_num_rows($result);
	
	if($count==1)
		
		{
			$_SESSION['login_user']=$name;
			header("location:home.php");
		}
	else
	{
		echo"for login name or pass is invalid";
	}
}
?>







<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="loginbox">
<img src="l4.png" class="avatar">
<form action="" method="POST">
NAME</br></br><input type="text" id="name" name="name" value="" 
	placeholder="enter user name"></br></br>
PASSWORD</br></br><input type="pass" id="pass" name="pass" value=""
	placeholder="enter user password"></br></br>
	<input type="submit" value="LOG IN">


<h3>
For New Users Register here.
<a class="" href="form.php">
Register
</a>
</h3>
</form>
</div>
</body>
</html>