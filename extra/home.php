<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsive Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
        <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
        <link rel="stylesheet" href="css/responsiveslides.css">
        <script src="js/responsiveslides.min.js"></script>
        <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
        
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background: #e1ecf2;
}
.wrapper{
  margin: 10px;
}
.wrapper .top_navbar{
  width: calc(100% - 20px);
  height: 60px;
  display: flex;
  position: fixed;
  top: 10px;
}

.wrapper .top_navbar .hamburger{
  width: 70px;
  height: 100%;
  background: #2e4ead;
  padding: 15px 17px;
  border-top-left-radius: 20px;
  cursor: pointer;
}

.wrapper .top_navbar .hamburger div{
  width: 35px;
  height: 4px;
  background: #92a6e2;
  margin: 5px 0;
  border-radius: 5px;
}

.wrapper .top_navbar .top_menu{
  width: calc(100% - 70px);
  height: 100%;
  background: #fff;
  border-top-right-radius: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.wrapper .top_navbar .top_menu .logo{
  color: #2e4ead;
  font-size: 20px;
  font-weight: 700;
  letter-spacing: 3px;
}

.wrapper .top_navbar .top_menu ul{
  display: flex;
}

.wrapper .top_navbar .top_menu ul li a{
  display: block;
  margin: 0 10px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 1px solid #2e4ead;
  border-radius: 50%;
  color: #2e4ead;
}

.wrapper .top_navbar .top_menu ul li a:hover{
  background: #4360b5;
  color: #fff;
}

.wrapper .top_navbar .top_menu ul li a:hover i{
  color: #fff;
}

.wrapper .sidebar{
  position: fixed;
  top: 70px;
  left: 10px;
  background: #2e4ead;
  width: 200px;
  height: calc(100% - 80px);
  border-bottom-left-radius: 20px;
  transition: all 0.3s ease;
}

.wrapper .sidebar ul li a{
    display: block;
    padding: 20px;
    color: #fff;
    position: relative;
    margin-bottom: 1px;
    color: #92a6e2;
    white-space: nowrap;
}

.wrapper .sidebar ul li a:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 3px;
  height: 100%;
  background: #92a6e2;
  display: none;
}

.wrapper .sidebar ul li a span.icon{
  margin-right: 10px;
  display: inline-block;
}

.wrapper .sidebar ul li a span.title{
  display: inline-block;
}

.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
  background: #4360b5;
  color: #fff;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
  display: block;
}

.wrapper .main_container{
  width: (100% - 200px);
  margin-top: -20px;
  margin-left: 185px;
  padding: 15px;
  transition: all 0.3s ease;
}

.wrapper .main_container .item{
  background: #fff;
  margin-bottom: 10px;
  padding: 15px;
  font-size: 14px;
  line-height: 22px;
}

.wrapper.collapse .sidebar{
  width: 70px;
}

.wrapper.collapse .sidebar ul li a{
  text-align: center; 
}

.wrapper.collapse .sidebar ul li a span.icon{
  margin: 0;
}

.wrapper.collapse .sidebar ul li a span.title{
  display: none;
}

.wrapper.collapse .main_container{
  width: (100% - 70px);
  margin-left: 70px;
}

.nav-second-level{
    border-bottom: none !important;
    padding-left: 37px;
}
        </style>
</head>
<body>
<div class="image-slider">
                                            
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
                                                
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					      <li><img src="images/slider-image2.jpg" alt=""></li>
					      <!--li><img src="images/slider-image1.jpg" alt=""></li-->
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">logo</div>
      <ul>
        <li><a href="#">
          <i class="fas fa-search"></i></a></li>
        <li><a href="#">
          <i class="fas fa-bell"></i>
          </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="#" class="active">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Books</span></a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Movies</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Sports</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Blogs</span>
          </a>
        <ul>
                            <li>
                                <a href="add-category.php">Add Category</a>
                            </li>
                            <li>
                                <a href="manage-category.php">Manage Category</a>
                            </li>
                        </ul>
        </li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-leaf"></i></span>
          <span class="title">Nature</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
								
							
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patients</h3>
						  <p>Register & Book Appointment</p>
						  <div class="button"><span><a href="hms/user-login.php">Click Here</a></span></div>
				    </div>
				</div>	

				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctors Login</h3>
						
						  <div class="button"><span><a href="hms/doctor/">Click Here</a></span></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Admin   Login</h3>
						
						  <div class="button"><span><a href="hms/admin">Click Here</a></span></div>
				     </div>
				</div>			
			</div>
		    </div>
		   </div>
		   
    
  </div>
</div>
    <script>
    $(".hamburger").click(function(){
   $(".wrapper").toggleClass("collapse");
});
    </script>
</body>
</html>