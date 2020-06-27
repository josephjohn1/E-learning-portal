<?php
include('conn.php');
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>free-educational-responsive-web-template-webEdu</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.jpg" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="courses.html">Courses</a></li>
					<li><a href="price.html">Price</a></li>
					<li><a href="videos.html">Videos</a></li>
                                        
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
                                       <li><a href="login.php">login</a></li>
                                      
                                        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Register <b class="caret"></b></a>
						<ul class="dropdown-menu">
				
							<li><a href="user/userreg.php">User registration</a></li>
							<li><a href="expert/expertreg.php">Expert registration</a></li>
							
						</ul>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">Start Online Education</h1>
							<p>learn through us</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

<div class="pricing">

  <div class="micro">
    <center>
      <h3>C++</h3>
      <iframe src="https://www.youtube.com/embed/RwV6AKmct5Y" frameborder="0" allowfullscreen></iframe>
      <a href="register.php"><button>Register Now to get full course</button></a>
    </center>
  </div>
  <div class="download">
    <center>
    <h3>GET FREE STUDY MATERIAL</h3>
    </center>
  </div>
  <div class="macro">
    <center>
      <h3>PHP</h3>
      <iframe src="https://www.youtube.com/embed/RwV6AKmct5Y" frameborder="0" allowfullscreen></iframe>
      <a href="register.php"><button>Register Now to get full course</button></a>
    </center>
  </div>
<!--  <div class="mark-scheme">
    <center>
    <h2>Marking Scheme</h2>
    <table>
      <tr>
        <th>UNITS</th>
        <th>Marks</th>
      </tr>
      <tr>
        <td class="heading" colspan="2">Part A: Introductory Microeconomics</td>
      </tr>
      <tr>
        <td>Introduction</td>
        <td>6</td>
      </tr>
      <tr>
        <td>Consumer's Equilibrium and Demand</td>
        <td>16</td>
      </tr>
      <tr>
        <td>Producer Behaviour and Supply</td>
        <td>16</td>
      </tr>
      <tr>
        <td>Forms of Market and Price Determination</td>
        <td>12</td>
      </tr>
      <tr>
        <td class="heading" colspan="2">Part B: Introductory Macroeconomics</td>
      </tr>
      <tr>
        <td>National Income and Related Aggregates</td>
        <td>15</td>
      </tr>
      <tr>
        <td>Money and Banking</td>
        <td>8</td>
      </tr>
      <tr>
        <td>Determination of Income and Employment</td>
        <td>12</td>
      </tr>
      <tr>
        <td>Government Budget and the Economy</td>
        <td>8</td>
      </tr>
      <tr>
        <td>Balance of Payments</td>
        <td>7</td>
      </tr>
    </table>
  </center>
  </div>
  <center>
  <h2>PRICING</h2>
  <div class="pric">
    <h3>Micro-Economics</h3>
    <h4>1,000/- INR</h4>
    <ul>
      <li>Introduction</li>
      <li>Consumer's Equilibrium and Demand</li>
      <li>Producer Behaviour and Supply</li>
      <li>Forms of Market and Price Determination</li>
    </ul>
    <a href="register.php"><button>Register Now</button></a>
  </div>
  <div class="pric">
    <h4>OFFER</h4>
    <h3>Combo</h3>
    <h4>1,779/- INR</h4>
    <ul>
      <li>Complete Micro-Economics</li>
      <li>Complete Macro-Economics</li>
      <li>Lifetime Membership</li>
      <li>Personal intraction with the Tutor</li>
    </ul>
    <a href="register.php"><button>Register Now</button></a>
  </div>
  <div class="pric">
    <h3>Macro-Economics</h3>
    <h4>1,000/- INR</h4>
    <ul>
      <li>National Income and Related Aggregates</li>
      <li>Money and Banking</li>
      <li>Determination of Income and Employment</li>
      <li>Government Budget and the Economy and Balance of Payments</li>
    </ul>
    <a href="register.php"><button>Register Now</button></a>
  </div>
</center>
</div>-->


<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">About</a> |
								<a href="courses.html">Courses</a> |
								<a href="price.html">Price</a> |
								<a href="videos.html">Videos</a> |
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2019. <a href="http://webthemez.com/" rel="develop">elearning.com</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
</form>    
</body>
</html>
