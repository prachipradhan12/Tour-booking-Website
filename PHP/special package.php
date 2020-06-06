<?php

session_start();
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html>
<head>
    <title>Traveller's</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Ubuntu&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../CSS/specialpackage.css">
       <link rel="stylesheet" href="../JAVASCRIPT/slideshow.js">
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    <style>
ul {
  list-style-type: none;
  margin-left: 0px;
    margin-bottom:-5px;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: navy;
}
        
       .session{
            font-family: serif;
           font-weight: bolder;
           font-size: 20px;
           color: aliceblue;
           float: right;
        }
</style>
</head>
<body>

        <ul>
  <li><a class="active" href="../index.php">Home</a></li>
  <li><a href="#news">World</a></li>
   <li class="session">Welcome : <?php echo $_SESSION['login'];?></li>
<li><a href="logout.php">Logout</a></li>
</ul>
    
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../IMAGES/london.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../IMAGES/germany.jpg" style="width:100%" height="460px">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../IMAGES/slide3.jpg" style="width:100%" height="460px">
  </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
    <center><h1 style="margin-top:190px"> SPECIAL PACKAGES</h1></center>
    <div class="card1" id="left" style="margin-top:10px">
 <a href="../PHP/packagedetails.php"><img src="../IMAGES/cardlondon.jpg" alt="Avatar" width="630px" height="=300px">
  <div class="container">
    <h2><b>London(1,20000/-)</b></h2> 
      <p>6 Day & 5 Night</p> </a>
  </div>
</div>
    <div class="card1" id="right" style="margin-top:10px">
        <a href="../PHP/bali.php"><img src="../IMAGES/balipack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Bali(2,50000/-)</b></h2> 
    <p>12 Day & 10 Night</p> 
  </div>
</div>
    
        <div class="card" id="left">
            <a href="../PHP/capetown.php"><img src="../IMAGES/cappack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Capetown(3,00000/-)</b></h2> 
    <p>6 Day & 5 Night</p> 
  </div>
</div>
    
          <div class="card" id="right">
              <a href="../PHP/australia.php"> <img src="../IMAGES/australiapack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Australia(1,00000/-)</b></h2> 
    <p>6 Day & 5 Night</p> 
  </div>
</div>
          <div class="card" id="left">
              <a href="../PHP/dubai.php"> <img src="../IMAGES/dubaipack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Dubai(1,42300/-)</b></h2> 
    <p>6 Day & 5 Night</p> 
  </div>
</div>
          <div class="card" id="right">
              <a href="../PHP/europe.php"> <img src="../IMAGES/europepack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Europe(2,50000/-)</b></h2> 
    <p>6 Day & 5 Night</p> 
  </div>
</div>
          <div class="card" id="left">
              <a href="../PHP/singapore.php">  <img src="../IMAGES/singaporepack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Singapore(1,50000/-)</b></h2> 
    <p>7 Day & 6 Night</p> 
  </div>
</div>
          <div class="card" id="right">
              <a href="../PHP/france.php">  <img src="../IMAGES/francepack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>France(8,20000/-)</b></h2> 
    <p>14 Day & 16 Night</p> 
  </div>
</div>
          <div class="card" id="left">
              <a href="../PHP/germany.php"> <img src="../IMAGES/germanypack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Germany(5,00000/-)</b></h2> 
    <p>6 Day & 5 Night</p> 
  </div>
</div>
    
    <div class="card" id="right">
        <a href="../PHP/malaysia.php"><img src="../IMAGES/malapack.jpg" alt="Avatar" width="630px" height="=300px"></a>
  <div class="container">
    <h2><b>Malaysia(2,30000/-)</b></h2> 
    <p>6 Day & 5 Night</p> 
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
<?php
} else{
header('location:logout.php');
}


?>