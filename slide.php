<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Verdana, sans-serif;
}
.mySlides {
  display: none;
}
.slideshow-container img {
  vertical-align: middle; 
height:500px; 
border-radius: 25px; }


.slideshow-container {

  width: 1300px;
  position: relative;
  margin: auto;
}


.text {
  color: white;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5s;
  animation-name: fade;
  animation-duration: 4s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<a href="pictures.php">
<div class="mySlides fade">
 <img src="image/Munnar_hillstation_kerala_20190207123437jpg" style="width:100%">
  <div class="text">Munnar </div>
</div>

<div class="mySlides fade">
  <img src="image/DARJEELING.jpg" style="width:100%">
  <div class="text">Darjeeling </div>
</div>

<div class="mySlides fade">
  <img src="image/imageJaisalmer.jpg" style="width:100%">
  <div class="text">Jaisalmer </div>
</div>

<div class="mySlides fade">
  <img src="image/COORG.jpg" style="width:100%">
  <div class="text">Coorg </div>
</div>

<div class="mySlides fade">
  <img src="image/UDAIPUR.jpg" style="width:100%">
  <div class="text">Udaipur </div>
</div>
</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

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
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</body>
</html> 