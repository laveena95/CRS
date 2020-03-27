<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    
    <title>Find your internships - @yield('title')</title>   

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

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/colors/red.css') }}" media="screen" />
    @yield('style')
    
  </head>

  <body>  
    <!-- Header Section Start -->
    <div class="header">    
      <div class="logo-menu">
        <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="/welcome"><img src="{{ asset('frontend/img/uLogo.jpg') }}" alt="" style="width:50px;height:50px;"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">              
                <!-- Start Navigation List -->
              <ul class="nav navbar-nav">
                <li>
                  <a href="{{ route('welcome') }}">
                  Home 
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
              <a href="{{ route('welcome') }}">Home</a>                      
            </li>       
          </ul>
          <!-- Mobile Menu End --> 
        </nav>

        <!-- Off Canvas Navigation -->
        <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
    </div>
    <!-- Header Section End -->  

    <!-- Page Header Start -->
    <div class="page-header" style="background: url('frontend/img/banner1.jpg');">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">@yield('title')</h2>
              <ol class="breadcrumb">
                <li><a href="#"><i class="ti-home"></i> Home</a></li>
                <li class="current">@yield('title')</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->    

    <section class="section text-center" >
      <div class="container">
        @yield('content')
        </div>
      </div>
    </section> 

      <!-- Footer Section Start -->
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
<script type="text/javascript" src="{{ asset('frontend/js/froala_editor.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/fullscreen.min.js') }}"></script>
@yield('script')

<script>
  $(function() {
    $('#edit').froalaEditor()
  });
</script>

</body>
</html>