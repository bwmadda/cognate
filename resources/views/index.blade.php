<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cognate Education</title>
	<meta name="author" content="Jalal Shamim">

	<!-- ========== COMMON STYLES ========== -->
	<link rel="stylesheet" href="{{URL::to('/')}}/public/front/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="{{URL::to('/')}}/public/front/css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" href="{{URL::to('/')}}/public/front/css/ionicons.min.css" media="screen">
    <link rel="stylesheet" href="{{URL::to('/')}}/public/front/css/animate-css/animate.min.css" media="screen">

	<!-- ========== PAGE STYLES ========== -->

	<!-- ========== THEME CSS ========== -->
	<link rel="stylesheet" href="{{URL::to('/')}}/public/front/css/main.min.css" media="screen">

	<!-- ========== MODERNIZR ========== -->
	<script src="{{URL::to('/')}}/public/front/js/modernizr/modernizr.min.js"></script>
</head>

<body class="wide">

	<div class="main-wrapper">
		<div class="main-wrapper-inner">

      <nav class="navbar navbar-toggleable-lg navbar-inverse fixed-top primary-on-scroll">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars navbar-toggle-icon"></span>
        </button>


        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" >Home</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.html">Default Layout</a>
        <a class="dropdown-item" href="index-2.html">Text Animation</a>
                        <a class="dropdown-item" href="index-3.html">Background Animation</a>
                        <a class="dropdown-item" href="index-4.html">Image Slider</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" >About Us</a>
                    <div class="dropdown-menu">
        <h6 class="dropdown-header"><i class="icon ion-more"></i> Pioneer in Industry <i class="icon ion-more"></i></h6>
                        <a class="dropdown-item" href="company-overview.html">Company Overview</a>
                      <a class="dropdown-item" href="company-history.html">Company History</a>
                        <a class="dropdown-item" href="our-approach.html">Our Approach</a>
                        <a class="dropdown-item" href="our-partners.html">Partners</a>
                        <a class="dropdown-item" href="careers.html">Careers</a>
                        <a class="dropdown-item" href="our-team.html">Our Team</a>
                      <a class="dropdown-item" href="team-profile.html">Team Member</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" >Services</a>
      <div class="dropdown-menu two-column-dropdown">
        <div class="row">
          <div class="col-sm-6">
            <h6 class="dropdown-header"><i class="icon ion-more"></i> Services Overview <i class="icon ion-more"></i> </h6>
                            <a class="dropdown-item" href="services.html"><i class="icon ion-ios-camera-outline"></i> Services Layout 1</a>
                          <a class="dropdown-item" href="services-layout-2.html"><i class="icon ion-ios-lightbulb-outline"></i> Services Layout 2</a>
                            <a class="dropdown-item" href="services-layout-3.html"><i class="icon ion-ios-flask-outline"></i> Services Layout 3</a>
          </div>
          <!-- /.col-sm-6 -->
          <div class="col-sm-6">
            <h6 class="dropdown-header"><i class="icon ion-more"></i> Service Details <i class="icon ion-more"></i> </h6>
                            <a class="dropdown-item" href="single-service.html"><i class="icon ion-ios-americanfootball-outline"></i> Single Service</a>
                            <a class="dropdown-item" href="single-service-2.html"><i class="icon ion-ios-unlocked-outline"></i> Single Layout 2</a>
          </div>
          <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="case-studies.html">Case Studies</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

            </ul>
        </div>
    </nav>

            <div id="myCarousel" class="carousel slide banner-carousel" data-ride="carousel" data-interval="50000">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item">
                        <img class="third-slide img-fluid" src="{{URL::to('/')}}/public/front/images/banner/banner-4.jpg" alt="First slide">
                        <div class="dark-overlay w-100 z-1">
                            <div class="carousel-caption d-md-block text-left">
                                <h2 class="white-text">Want to Study Abroad?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua incididunt ut labore et dolore magna aliqua.</p>
                                <p><a class="btn btn-primary" href="#" role="button">Contact Us</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide img-fluid" src="{{URL::to('/')}}/public/front/images/banner/banner-2.jpg" alt="Second slide">
                        <div class="dark-overlay w-100 z-1">
                            <div class="carousel-caption d-md-block text-left">
                                <h2 class="white-text">IELTS/PTE/TOFEL/ENGLISH</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua incididunt ut labore.</p>
                                <p><a class="btn btn-primary" href="#" role="button">Contact Us</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="third-slide img-fluid" src="{{URL::to('/')}}/public/front/images/banner/banner-3.jpg" alt="Third slide">
                        <div class="dark-overlay w-100 z-1">
                            <div class="carousel-caption d-md-block text-left">
                                <h2 class="white-text">Immigration & Visa Consultants</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <section class="particles-cta-section">
				<div class="container particles-content">
					<div class="row align-items-center">
						<div class="col-md-12 col-lg-7 mb-sm-2">
							<h5 class="card-title white-text">Free online assessment</h5>
							<p class="card-text">Get your free assessment with Cognate Education right now!</p>
						</div>
						<!-- /.col-md-8 -->
						<div class="col-md-12 col-lg-5">
							<form class="form-inline" action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" >

								<button type="submit" class="btn btn-secondary">GET FREE ASSESSMENT </button>
							</form>
						</div>
						<!-- /.col-md-4 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<div id="particles-cta" class="bg-primary particles-cta"></div>
			</section>
			<!-- /.particles-cta -->

            <section class="cards-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card card-shadow" >
                            	<img class="card-img-top img-fluid" src="{{URL::to('/')}}/public/front/images/card/card-1.jpg" alt="Card image cap">
                            	<div class="card-block">
                            		<h5 class="card-title">Construction Strategy</h5>
                            		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            		<a href="single-service.html" class="btn btn-primary btn-sm">Read More</a>
                            	</div>
                                <div class="card-footer">
                                    <span class="float-right"><small>Joined in 2015</small></span>
                                    <span><i class="fa fa-user-o" aria-hidden="true"></i><small> 75 Friends</small></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4 mb-2">
                            <div class="card card-shadow" >
                            	<img class="card-img-top img-fluid" src="{{URL::to('/')}}/public/front/images/card/card-3.jpg" alt="Card image cap">
                            	<div class="card-block">
                            		<h5 class="card-title">IT Strategy</h5>
                            		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            		<a href="single-service-2.html" class="btn btn-primary btn-sm">Read More</a>
                            	</div>
                                <div class="card-footer">
                                    <span class="float-right"><small>Joined in 2016</small></span>
                                    <span><i class="fa fa-user-o" aria-hidden="true"></i><small> 25 Friends</small></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4 mb-2">
                            <div class="card card-shadow" >
                            	<img class="card-img-top img-fluid" src="{{URL::to('/')}}/public/front/images/card/card-2.jpg" alt="Card image cap">
                            	<div class="card-block">
                            		<h5 class="card-title">Business Strategy</h5>
                            		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            		<a href="single-service.html" class="btn btn-primary btn-sm">Read More</a>
                            	</div>
                                <div class="card-footer">
                                    <span class="float-right"><small>Joined in 2017</small></span>
                                    <span><i class="fa fa-user-o" aria-hidden="true"></i><small> 65 Friends</small></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.feature-section -->

            <section class="content-section bg-parallax-1">
                <div class="container">
                    <div class="row justify-content-md-center mb-2">
                        <div class="col-md-6 text-center">
                            <h3 class="white-text">About our immigration consulting</h3>
                            <p class="lead light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row pt-4">
                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-social-android feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">Mobile-Ready</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-loop feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">Bootstrap 4</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-bowtie feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">Clean Design</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-ios-body feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">User Friendly</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-eye feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">Retina Ready</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-ios-bolt feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">Performance Optimized</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-code-working feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">Well Coded</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-checkmark feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">Dedicated Support</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-4 one-feature">
                            <div class="row no-gutters">
                                <div class="col text-center">
                                    <i class="icon ion-search feature-icon white-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="white-text">SEO Friendly</h5>
                                    <p class="light-white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.white-section -->

            <div class="cta cover-cta">
                <div class="container">
                    <div class="card">
                    	<div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-lg-8 mb-sm-2">
                                    <h5 class="card-title">Still not convinced?</h5>
                            		<p class="card-text">Just get in touch with us and we will schedule a demo.</p>
                                </div>
                                <!-- /.col-md-8 -->
                                <div class="col-md-12 col-lg-4">
                                	<a href="contact.html" class="btn btn-success">About Vis Process</a>
                                </div>
                                <!-- /.col-md-4 -->
                            </div>
                            <!-- /.row -->
                    	</div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.cta -->

            <!-- /.content-section -->

            <section class="parallax bg-testimonials-1">
                <div class="dark-overlay">
                    <div class="container">
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-md-6 text-center">
                                <h3 class="white-text">Join students over 1000+ like you</h3>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="owl-carousel owl-theme pt-2 pb-4">
                            <div class="row">
                                <div class="col text-center">
                                    <i class="fa fa-quote-left fa-2x white-text"></i>
                                    <p class="lead m-20 white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <footer class="blockquote-footer mb-10 white-text">John Doe <cite title="Source Title">CEO, Example Inc</cite></footer>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <i class="fa fa-quote-left fa-2x white-text"></i>
                                    <p class="lead m-20 white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <footer class="blockquote-footer mb-10 white-text">Adam Chen <cite title="Source Title">CFO, Example Inc</cite></footer>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <i class="fa fa-quote-left fa-2x white-text"></i>
                                    <p class="lead m-20 white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <footer class="blockquote-footer mb-10 white-text">Joseph Murphy <cite title="Source Title">COO, Example Inc</cite></footer>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <i class="fa fa-quote-left fa-2x white-text"></i>
                                    <p class="lead m-20 white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <footer class="blockquote-footer mb-10 white-text">John Doe <cite title="Source Title">CEO, Example Inc</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.light-overlay -->
            </section>
            <!-- /.content-section parallax bg-img-1 -->

            <section class="bg-primary">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-1">
                        	<div class="content-section">
	                            <h3 class="text-center">Request a call back.</h3>
	                            <form action="#" class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="name">Full Name</label>
	                                        <input type="text" class="form-control" id="name" placeholder="Enter your full name..." required="">
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="email2">Email Address</label>
	                                        <input type="email" class="form-control" id="email2" placeholder="Enter your email id..." required>
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="contact">Contact Number</label>
	                                        <input type="text" class="form-control" id="contact" placeholder="Enter your contact number...">
	                                    </div>
	                                </div>
	                                <!-- /.col-md-6 -->
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="message">Message</label>
	                                        <textarea class="form-control" id="message" rows="7" placeholder="Enter your message here..."></textarea>
	                                    </div>
	                                    <div class="text-right">
	                                        <button id="button" type="submit" class="btn btn-secondary pl-4 pr-4">Send Message</button>
	                                    </div>
	                                </div>
	                                <!-- /.col-md-6 -->
	                            </form>
	                        </div>
                        </div>
                        <!-- /.col-md-8 -->
                        <div class="col-md-4 offset-lg-1 hidden-md-down overflow-hidden">
                            <img src="{{URL::to('/')}}/public/front/images/woman-690036.jpg" alt="" style="max-height: 425px;">
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.content-section bg-primary -->

            <div class="map-wrapper">
                <div id="map" class="map"></div>
            </div>
            <!-- /.map-wrapper -->


            <footer class="st-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-lg-2 mb-20">
                            <h6 class="column-title">Products</h6>
                            <ul class="nav flex-column">
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">ThemeForest</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">Elements</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">Codecanyon</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">GraphicRiver</a>
                            	</li>
                            </ul>
                        </div>
                        <!-- /.col-sm-3 col-md-4 col-lg-2 -->
                        <div class="col-sm-3 col-md-4 col-lg-2 mb-20">
                            <h6 class="column-title">Extras</h6>
                            <ul class="nav flex-column">
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">AudioJungle</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">PhotoDune</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">3DOcean</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">VideoHive</a>
                            	</li>
                            </ul>
                        </div>
                        <!-- /.col-sm-3 col-md-4 col-lg-2 -->
                        <div class="col-sm-3 col-md-4 col-lg-2 mb-20">
                            <h6 class="column-title">Support</h6>
                            <ul class="nav flex-column">
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">Salt - HTML</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">SoftEase</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">Coming Soon</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" href="#">Shuban - Blog</a>
                            	</li>
                            </ul>
                        </div>
                        <!-- /.col-sm-3 col-md-4 col-lg-2 -->
                        <div class="col-sm-3 col-md-12 col-lg-6">
                            <h6 class="column-title">About</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <a href="https://www.facebook.com/SaltTechno/" target="_blank"><i class="icon ion-social-facebook mr-4 gray-text h3"></i></a>
                            <a href="https://twitter.com/SaltTechno/" target="_blank"><i class="icon ion-social-twitter mr-4 gray-text h3"></i></a>
                            <a href="#" target="_blank"><i class="icon ion-social-googleplus mr-4 gray-text h3"></i></a>
                            <a href="#" target="_blank"><i class="icon ion-social-instagram mr-4 gray-text h3"></i></a>
                            <a href="#" target="_blank"><i class="icon ion-social-pinterest mr-4 gray-text h3"></i></a>
                        </div>
                        <!-- /.col-sm-3 col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->

				<div class="scroll-top-button">
					<i class="fa fa-arrow-up"></i>
				</div>
				<!-- /.scroll-top-button -->
            </footer>
            <!-- /.st-footer -->
		</div>
		<!-- /.main-wrapper-inner -->
	</div>
	<!-- /.main-wrapper -->

	<!-- ========== COMMON JS FILES ========== -->
	<script src="{{URL::to('/')}}/public/front/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{URL::to('/')}}/public/front/js/bootstrap/tether.min.js"></script>
	<script src="{{URL::to('/')}}/public/front/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{URL::to('/')}}/public/front/js/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{URL::to('/')}}/public/front/js/counterup/jquery.counterup.min.js"></script>
	<script src="{{URL::to('/')}}/public/front/js/owl/owl.carousel.min.js"></script>

	<!-- ========== PAGE JS FILES ========== -->
	<script src="{{URL::to('/')}}/public/front/js/init-map.js"></script>
	<script src="{{URL::to('/')}}/public/front/js/particlejs/particles.min.js"></script>

	<!-- ========== THEME JS ========== -->
	<script src="{{URL::to('/')}}/public/front/js/main.js"></script>
	<script>
		$(function() {

			particlesJS.load('particles-cta', '{{URL::to('/')}}/public/front/js/particlejs/particlesjs-cta-config.json', function() {
                console.log('callback - particles.js config loaded');
            });

            $(".owl-carousel").owlCarousel({
                items: 2,
                nav: true,
                margin:50,
                navText: ['<i class="icon ion-arrow-left-b"></i>', '<i class="icon ion-arrow-right-b"></i>'],
				responsiveClass: true,
				responsive : {
				    // breakpoint from 0 up
				    0 : {
				        items: 1,
				    },
				    // breakpoint from 480 up
				    480 : {
				        items: 1,
				    },
				    // breakpoint from 768 up
				    768 : {
				        items: 1,
				    }
				}
            });

		});

	</script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9khzZ__MOwmZ3yX21x-jtUx-gkVpxhnA&callback=initMap">
    </script>

	<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-100615511-6', 'auto');
ga('send', 'pageview');

</script>
</body>

</html>
