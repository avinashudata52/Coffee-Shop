<html>

<head>
    <title>Testimonials - Easy Tutorials</title>
    <link rel="stylesheet" href="review.css">
</head>

<body>


    <div class="container">
        <div class="veiw-box">
            <div id="testimonials">
                
                <div class="user">
                    <img src="anjali.jpg" alt="">
                    <p>I like this coffee it's really smooth and has an after taste of chocolate. Service was brilliant and the coffee was delivered the day after I ordered it and was ground perfectly.</p>
                    <h3>Anjali Guda</h3>
                </div>
                
                <div class="user space">
                    <img src="anjali.jpg" alt="">
                    <p>I like this coffee it's really smooth and has an after taste of chocolate. Service was brilliant and the coffee was delivered the day after I ordered it and was ground perfectly.</p>
                    <h3>Anjali Guda</h3>
                </div>
                
                <div class="user">
                    <img src="anjali.jpg" alt="">
                    <p>I like this coffee it's really smooth and has an after taste of chocolate. Service was brilliant and the coffee was delivered the day after I ordered it and was ground perfectly.</p>
                    <h3>Anjali Guda</h3>
                </div>
                 
                
                
            </div>
            
            <div class="controls">
                <span id="control1"></span>
                <span id="control2" class="active"></span>
                <span id="control3"></span>
                
            </div>
            
        </div>
    </div>
    


    <script>
    
        var testimonials = document.getElementById('testimonials');
        var control1 = document.getElementById('control1');
        var control2 = document.getElementById('control2');
        var control3 = document.getElementById('control3');
 
        
        
        control1.onclick=function(){
            testimonials.style.transform = "translateX(870px)";
            control1.classList.add("active");
            control2.classList.remove("active");
            control3.classList.remove("active");

        }
        
        control2.onclick=function(){
            testimonials.style.transform = "translateX(0px)";
            control1.classList.remove("active");
            control2.classList.add("active");
            control3.classList.remove("active");

            
        }
        
        control3.onclick=function(){
            testimonials.style.transform = "translateX(-870px)";
            control1.classList.remove("active");
            control2.classList.remove("active");
            control3.classList.add("active");

           
        }
        
       
        
        
        
        
    
    </script>
    
    
    
    
    

</body>

</html>
