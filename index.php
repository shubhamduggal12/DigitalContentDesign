<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
position: relative;
margin: auto;
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
    user-select: none;
     background-color: rgba(0,0,0,0.8);
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
/* Number text (1/3 etc) */
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

<div class="slideshow-container" id="screenshots">
    <div>Screenshots:</div>
<div class="mySlides fade">
<div class="">1 / 17</div>
<img src="1.JPG" style="width:100%">

</div>

<div class="mySlides fade">
<div class="">2 / 17</div>
<img src="2.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">3 / 17</div>
<img src="3.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">4 / 17</div>
<img src="4.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">5 / 17</div>
<img src="5.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">6 / 17</div>
<img src="6.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">7 / 17</div>
<img src="7.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">8 / 17</div>
<img src="8.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">9 / 17</div>
<img src="9.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">10 / 17</div>
<img src="10.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">11 / 17</div>
<img src="11.JPG" style="width:100%">
</div>


<div class="mySlides fade">
<div class="">12 Admin / 17</div>
<img src="Admin_1.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">13 Admin / 17</div>
<img src="Admin_2.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">14 Admin / 17</div>
<img src="Admin_3.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">15 Admin / 17</div>
<img src="Admin_4.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">16 Admin / 17</div>
<img src="Admin_5.JPG" style="width:100%">
</div>

<div class="mySlides fade">
<div class="">17 Admin / 17</div>
<img src="Admin_6.JPG" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
<span class="dot" onclick="currentSlide(6)"></span>
<span class="dot" onclick="currentSlide(7)"></span>
<span class="dot" onclick="currentSlide(8)"></span>
<span class="dot" onclick="currentSlide(9)"></span>
<span class="dot" onclick="currentSlide(10)"></span>
<span class="dot" onclick="currentSlide(11)"></span>
<span class="dot" onclick="currentSlide(12)"></span>
<span class="dot" onclick="currentSlide(13)"></span>
<span class="dot" onclick="currentSlide(14)"></span>
<span class="dot" onclick="currentSlide(15)"></span>
<span class="dot" onclick="currentSlide(16)"></span>
<span class="dot" onclick="currentSlide(17)"></span>
</div>

<div class="slideshow-container" id="screenshots">
    <div>Working Model:</div>
<video controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
    </div>
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
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>

