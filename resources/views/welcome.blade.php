<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    
    <title>Sabaragamuwa University of Srilanka</title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/uLogo.jpg') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">    
    <link rel="stylesheet" href="{{ asset('frontend/css/jasny-bootstrap.min.css') }}" type="text/css">  
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}" type="text/css">  
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/material-kit.css') }}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/fonts/font-awesome.min.css') }}" type="text/css"> 
    <link rel="stylesheet" href="{{ asset('frontend/fonts/themify-icons.css') }}"> 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/extras/animate.css') }}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/extras/owl.theme.css') }}" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/extras/settings.css') }}" type="text/css"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" type="text/css">
    <link href="{{ asset('frontend/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/colors/red.css') }}" media="screen" />
    
  </head>

  <body>  
    <!-- Header Section Start -->
    <div class="header">    
      <!-- Start intro section -->
      <section id="intro" class="section-intro">
        <div class="logo-menu">
          <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><img src="{{ asset('frontend/img/uLogo.jpg') }}" alt="" style="width:50px;height:50px;"></a>
              </div>

              <div class="collapse navbar-collapse" id="navbar">              
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                  <li>
                    <a class="active" href="{{ route('welcome') }}">
                    Home
                    </a>   
                  </li>
                  <li>
                    <a href="about">
                      About 
                    </a>
                    </li>       
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                  <li class="btn-m"><a href="login"><i class="ti-lock"></i>  Log In</a></li> 
                  <li class="btn-m"><a href="{{ route('register') }}"><i class="ti-lock"></i>  Register</a></li> 
                </ul>
              </div>                           
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a class="active" href="{{ route('welcome') }}">Home</a>                       
              </li> 
              <li class="btn-m"><a href="login"><i class="ti-pencil-alt"></i> Post A Job</a></li>
              <li class="btn-m"><a href="login"><i class="ti-lock"></i>  Log In</a></li> 
              <li class="btn-m"><a href="register"><i class="ti-lock"></i>  Register</a></li>          
            </ul>
            <!-- Mobile Menu End --> 
          </nav>
        </div>
        <!-- Header Section End -->    

        <div class="search-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Department of Computing & Information Systems<br> Faculty of Applied Sciences</h1><br><br><h2><img src="{{ asset('frontend/img/logo2.png') }}"> Find your Internships!</h2>
                <div class="content">
                  <form method="" action="">
                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="job title / keywords / company name">
                          <i class="ti-time"></i>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="city / province / zip code">
                          <i class="ti-location-pin"></i>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="search-category-container">
                          <label class="styled-select">
                            <select class="dropdown-product selectpicker">
                              <option>All Categories</option>
                              <option>Web Development</option>
                              <option>Software Engineering</option>
                              <option>System Analyst</option>
                              <option>Business Analyst</option>
                              <option>UI/UX Engineer</option>
                              <option>Networking</option>                              
                              <option>Graphical Designer</option>
                            </select>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-1 col-sm-6">
                        <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="popular-jobs">
                  <b>Popular Keywords: </b>
                  <a href="#">Web Design</a>
                  <a href="#">Software</a>
                  <a href="#">Programming</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- end intro section -->
    </div> 
    <!-- Find Job Section Start -->
    <section class="find-job section">
      <div class="container">
        <h2 class="section-title">Hot Jobs</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.blade.php"><img src="{{ asset('frontend/img/jobs/img-1.jpg') }}" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.blade.php">Need a web designer</a><span class="full-time">Full-Time</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.blade.php"><i class="ti-brush"></i>Art/Design</a></span>
                      <span><i class="ti-location-pin"></i>Washington, USA</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.blade.php" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.blade.php"><img src="{{ asset('frontend/img/jobs/img-2.jpg') }}" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.blade.php">Front-end developer needed</a><span class="full-time">Full-Time</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.blade.php"><i class="ti-desktop"></i>Technologies</a></span>
                      <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.blade.php" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.blade.php"><img src="{{ asset('frontend/img/jobs/img-3.jpg') }}" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.blade.php">Senior Accountant</a><span class="part-time">Part-Time</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.blade.php"><i class="ti-home"></i>Finance</a></span>
                      <span><i class="ti-location-pin"></i>Delaware, USA</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.blade.php" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.blade.php"><img src="{{ asset('frontend/img/jobs/img-4.jpg') }}" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.blade.php">Fullstack web developer needed</a><span class="full-time">Full-Time</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.blade.php"><i class="ti-desktop"></i>Technologies</a></span>
                      <span><i class="ti-location-pin"></i>New York, USA</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.blade.php" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="showing pull-left">
              <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
            </div>                    
            <ul class="pagination pull-right">              
              <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Find Job Section End -->
    
    <!-- Start Purchase Section -->
    <section class="section purchase" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="section-content text-center">
            <h1 class="title-text">
              Looking for an Intership
            </h1>
            <p>Join thousand of intern and earn what you deserve!</p>
            <a href="login" class="btn btn-common">Get Started Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Purchase Section -->
     
    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <h2 class="section-title">
          Latest News
        </h2>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('frontend/img/blog/home-items/img1.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Dec 20, 2017</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.blade.php">
                  <h3>
                    Tips to write an impressive resume online for beginner
                  </h3>
                </a>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.blade.php" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('frontend/img/blog/home-items/img2.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Jan 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.blade.php">
                  <h3>
                    Let's explore 5 cool new features in JobBoard theme
                  </h3>
                </a>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.blade.php" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.blade.php">
                  <img src="{{ asset('frontend/img/blog/home-items/img3.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Mar 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.blade.php">
                  <h3>
                    How to convince recruiters and get your dream job
                  </h3>
                </a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.blade.php" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section">
      <div class="container">
        <div class="row">
          <div class="touch-slider" class="owl-carousel owl-theme">
            <div class="item active text-center">  
              <img class="img-member" src="{{ asset('frontend/img/testimonial/img1.jpg') }}" alt=""> 
              <div class="client-info">
                <h2 class="client-name">Jessica <span>(Senior Accountant)</span></h2>
              </div>
              <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
            </div>
            <div class="item text-center">
              <img class="img-member" src="{{ asset('frontend/img/testimonial/img2.jpg') }}" alt=""> 
              <div class="client-info">
                <h2 class="client-name">John Doe <span>(Project Menager)</span></h2>
              </div>
              <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
            </div>
            <div class="item text-center">
              <img class="img-member" src="{{ asset('frontend/img/testimonial/img3.jpg') }}" alt=""> 
              <div class="client-info">
                <h2 class="client-name">Helen <span>(Engineer)</span></h2>
              </div>
              <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Clients Section -->
    <section class="clients section">
      <div class="container">
        <h2 class="section-title">
          Clients & Partners
        </h2>
        <div class="row"> 
          <div id="clients-scroller">
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img1.png') }}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img2.png') }}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img3.png') }}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img4.png') }}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img5.png') }}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img6.png') }}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img6.png') }}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('frontend/img/clients/img6.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Client Section End -->

    <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-briefcase"></i>
              </div>
              <div class="desc">                
                <h2>Jobs</h2>
                <h1 class="counter">1205</h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-user"></i>
              </div>
              <div class="desc">
                <h2>Members</h2>
                <h1 class="counter">80</h1>                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-write"></i>
              </div>
              <div class="desc">
                <h2>Resume</h2>
                <h1 class="counter">77</h1>                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-heart"></i>
              </div>
              <div class="desc">
                <h2>Company</h2>
                <h1 class="counter">50</h1>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

  <!-- Footer Section Start -->

  <!-- Footer Section End -->  
        <!--==========================
      Footer
    ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-info">
              <h3><img src="{{ asset('frontend/img/uLogo.jpg') }}" alt="" style="width:50px;height:50px;"> <img src="{{ asset('frontend/img/logo2.png') }}"</h3>
              <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li style="margin-top:10px;"><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">About us</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Services</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Terms of service</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
            <div class="col-lg-3 col-md-6 footer-links"  style="width:250px;">
              <h4>Trending Jobs</h4>
              <ul>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Android Developer</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Frontend Developer</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Junior Tester</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Associate Software Engineer</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Project Manager</a></li>
              </ul>
            </div>

              <div class="social-links" style=" margin-top:200px;">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter" >
              <h4>Follow Us</h4>
              <p style="margin-top:10px;">Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form action="" method="post" style=" margin-top:20px;">
                <input type="email" name="email" placeholder="Your email"><input type="submit"  value="Send">
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
        <p>All Rights reserved &copy; 2019 | Developed by <i class="fa fa-heart"></i> R.Laveena Year III Semester I, Department of Computing & Information Systems. </p>
        </div>
      </div>
    </footer><!-- #footer -->
  <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="ti-arrow-up"></i>
    </a>

    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>
          
    <!-- Main JS  -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-min.js') }}"></script>      
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('frontend/js/material.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/material-kit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jasny-bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/contact-form-script.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.themepunch.tools.min.js') }}"></script>
    
  </body>
</html>