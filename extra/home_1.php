<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

/* Dropdown Button */
.dropbtn {
    background-color: #ffffff;/*#4CAF50;*/
  color: black;/*white;*/
  padding: 10px;
  font-size: 16px;
  border: none;
  height: 43.5px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #ccc;}/*#3e8e41;}*/

.mySlides {display:none;}

</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">
    
    
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="images/pic1.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4 style="color: #0099cc;"><b>Online Appointment System</b></h4>
    <p class="w3-text-grey">Created by MCA.IV</p>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-blue"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ESTIMATE</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <!--Hllo WAit............ -->
    <div class="dropdown">
  <button class="dropbtn"><i class="fa fa-user fa-fw w3-margin-right"></i>Drop down <i class="fa fa-angle-down"></i></button><!--aria-hidden="true"-->
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
      </div>
    
  </div>
  <div class="w3-panel w3-large">
      <i class="fa fa-facebook-official w3-hover-opacity" style="color: #0099cc"></i>
    <i class="fa fa-instagram w3-hover-opacity" style="color: #0099cc"></i>
    <i class="fa fa-snapchat w3-hover-opacity" style="color: #0099cc"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" style="color: #0099cc"></i>
    <i class="fa fa-twitter w3-hover-opacity" style="color: #0099cc"></i>
    <i class="fa fa-linkedin w3-hover-opacity" style="color: #0099cc"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="images/pic1.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1 style="color: #0099cc;"><b>Online Appointment System</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <button class="w3-button w3-blue" style="height:44px"><i class="fa fa-home w3-xlarge"></i></button>
      <div class="dropdown">
  <button class="dropbtn"><i class="fa fa-hospital-o"></i>&thinsp;Hospital <i class="fa fa-angle-down"></i></button><!--aria-hidden="true"-->
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
      </div>
      
      <div class="dropdown">
  <button class="dropbtn"><i class="fa fa-hospital-o"></i>&thinsp;Excellence <i class="fa fa-angle-down"></i></button><!--aria-hidden="true"-->
  <div class="dropdown-content">
    <a href="#">Cardiology</a>
    <a href="#">Orthopaedics</a>
    <a href="#">Neurology</a>
    <a href="#">Urology</a>
  </div>
      </div>
      
      <div class="dropdown">
  <button class="dropbtn"><i class="fa fa-sign-in"></i>&thinsp;Login as <i class="fa fa-angle-down"></i></button><!--aria-hidden="true"-->
  <div class="dropdown-content">
    <a href="hms/admin">Admin</a>
    <a href="hms/doctor/">Doctor</a>
    <a href="hms/user-login.php">Patients</a>
  </div>
      </div>
 </div>
    </div>
  </header>
                         
<div class="w3-content w3-section" style="max-width:961px;">
  <img class="mySlides w3-animate-fading" src="images/slider-image1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/slider-image2.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/doctor2.jpg" style="width:100%;">
  <img class="mySlides w3-animate-fading" src="images/doctor4.jpg" style="width:100%;">
</div>

  <br>
  <div class="w3-blue w3-center w3-padding-24" style="height:63px; width: 100%;">&copy; OAS 2020&emsp;<a href="#" title="W3.CSS" target="_blank" class="w3-hover-opacity" style="text-decoration: none">All Right Reserved</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}


var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000); // Change image every 2 seconds
}

</script>

</body>
</html>
