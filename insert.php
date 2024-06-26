<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name= $_POST['name'];
	$cont= $_POST['cont'];
	$email= $_POST['email'];
	$pass=md5($_POST['pass']);
	
$qry= mysqli_query($con,"INSERT INTO info(name, cont, email, pass) 
	VALUES ('$name','$cont','$email','$pass')");
	
		
	if($qry == true)
	{
		echo "user details inserted";
	}
	else
	{
		echo "not";
	}
}
else
	{
		echo "Request method is not POST";
	}
?>
