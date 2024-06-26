<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="coffeeshop.css">
		<link rel="stylesheet" href="3dot.css">
		
		
		
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script>
                function changeLanguage(language) {
                    var element = document.getElementById("url");
                    element.value = language;
                    element.innerHTML = language;
                }
 
                function showDropdown() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }
				 // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i <dropdowns.length; i++) {
                            varopenDropdown =dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
			
</head>

<body>
	<div class="container">
		<div class="nav-bar">
			<h1 class="title">cof<span>fee</span></h1>
			<div class="dropdown">
                    <!-- three dots -->
                    <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- menu -->
                    <div id="myDropdown" class="dropdown-content">
                        <a href="login.php">Login</a>
                        <a href="form.php">Registration</a>
						<a href="logout.php">Logout</a>
                      
                    </div>
                </div>
            
			
			<p></p>
			<ul class="menu">
				<li><a href="#">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
								<li><a href="product.php">PRODUCT</a></li>
								<li><a href="review.php">REVIEW</a></li>
				<li><a href="contact.php">CONTACT</a></li>
								<li><a href="menu.php">MENU</a></li>
								
				
		
			</ul>
			
		</div>
		
		
			<div class="home">
		<h1 class="title-1">Stress <span>less</span> and enjoy the best</h1>
		<p>We provide a variety of uniques and Best coffees</p><br>
		<button id="button" onclick="window.location.href='menu.php'"
		>shop now</button>
		



	</div>
		<div class="hero-bg">
			<img src="">
			</div>
		<div class="scroll">
			<a href="#brands">
				<svg xmigs=""</svg>
			</a>

		</div>
</div>
	</div>
</body>
</html>
