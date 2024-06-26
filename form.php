<html>
<head>
	<title>Coffee Heaven</title>
	<link rel="stylesheet" type="text/css" href="form.css">
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") 
  {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</head>
<body class="body">
<div class="loginbox">
<form id="reg"action="insert.php"method='POST'>
<center>
<h1 class="h1">Coffee Heavan</h1>
<font color="white">
		<td>
			 Name: <input type="text" name="name" id="name" value=""
			placeholder="enter your good name" required></br></br>
		</td>
	</tr>

	<tr>
		<td>
			Contact: <input type="text" name="cont" id="cont" value=""
			placeholder="enter your contact num" required></br></br>
		</td>
	</tr>
	<tr>
		<td>
			Email id: <input type="text" name="email" id="email" value=""
			placeholder="enter your email" required></br></br>
		</td>
	</tr>
	
	<tr>
		<td>
			Password: <input type="password" name="pass" id="myInput" value=""
			placeholder="enter your password" required></br></br>
			<input type="checkbox" onclick="myFunction()">showpassword</br></br>
		</td>
	</tr>
	
		<button type="reset">reset</button></br></br>
		<button type="submit">submit</button></br></br>
			Already registered........
		<a href="login.php" class="a">
			Login
			</a>
</font>		
</h2>
</center>
</form>
</div>
</body>
</html>