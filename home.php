<?php
include"lock.php";
?>
<html>
<head>
<link rel="stylesheet" href="logout.css">
</head>
<body class="body">
<div class="loginbox">
<h1 class="h1"><center>WELCOME TO COFFEE HEAVAN</center></h1>
<button>
<a href="logout.php">logout
</a>
</button></br></br>

<form action="" method="POST">
 <font size="2">
	SEARCH BY USER NAME :</font>
	
<input type="text" name="searchname"><br><br>

<center><input type="submit" name="search"></center><br>

</form>
</div>
</body>
</html>



<?php
require_once("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$search=$_POST["searchname"];
	$qry=mysqli_query($con,"SELECT * FROM info WHERE name 
	 LIKE '%$search%' OR cont LIKE '%$search%' ");
	
	while ($row = mysqli_fetch_array($qry))
	{
		echo$row["id"]."<br>";
		echo$row["name"]."<br>";
		echo$row["cont"]."<br>";
		echo$row["email"]."<br>";
		
	}
	
	//print_r($row);
	
}
?>