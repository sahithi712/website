<!DOCTYPE html>
<html>
<head>
<meta name="homepage" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;}
p{
padding:20px;}
  


.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  padding:5px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/8 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

</style>
</head>
<body>

<div class="topnav">

  <a href="further information.php">FURTHER INFORMATION</a>
  <a class="active" href="bloodtips.php">TIPS FOR BLOOD DONATION</a>
 <a href="whocangiveblood.php">WHO CAN GIVE BLOOD?</a>
  <a href="whygiveblood.php">WHY GIVE BLOOD?</a>
  <a  href="login1.php">LOGIN</a>
 </div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="slide1.jpg" style="width:100%;height:500px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="slide7.jpg" style="width:100%;height:500px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="slide2.jpg" style="width:100%;height:500px;">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="slide3.jpg" style="width:100%;height:500px;">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="slide4.jpg" style="width:100%;height:500px;">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="slide5.jpg" style="width:100%;height:500px;">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="slide6.jpg" style="width:100%;height:500px;">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="slidelast.jpg" style="width:100%;height:500px;">
  
</div>






<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<footer style="background-color:grey;">
	<footer style="font-size:30px;">

  <p>CONTACT INFORMATION: <a href="mailto:dvgnonlineblooddonation@gmail.com">dvgnonlineblooddonation@gmail.com</a></p>
</footer>






</body>
</html>
