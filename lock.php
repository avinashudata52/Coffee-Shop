<?php
session_start();
include("config.php");

if(!isset($_SESSION['login_user']))
{
	header("location: login.php");
}

$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($con,"SELECT * FROM info WHERE name='$user_check'");

$row=mysqli_fetch_array($ses_sql);

echo '<span style="color: black; font-size:50px;">' ,"WELCOME  ".$login_session=$row['name'];
?>