<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Find your internships - @yield('title')</title> 

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('frontend/img/uLogo.jpg') }}">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('backend/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/gritter/css/jquery.gritter.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap-fileupload/bootstrap-fileupload.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap-datepicker/css/datepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap-daterangepicker/daterangepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap-timepicker/compiled/timepicker.css') }}" />
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('backend/lib/chart-master/Chart.js') }}"></script>
  @yield('style')<!--styles for specific pages-->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg" style="margin-top:-20px;">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><img src="{{ asset('backend/img/depLogo.jpg') }} " style="width:70px;height:40px;margin-top:-3px;"></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme"></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green"></p>
              </li>
              <li class="external">
                <a href="#"></a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green"></p>
              </li>
              <li>
                <a href="index.html#"></a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning"></span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow"></p>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{ route('welcome') }}"><i class="fa fa-power-off"></i></a></li>
         <!--newly added for user name on top of the dashboard--> 
         <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse "  style="background-color:;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="uploads/candidate/Avatar/{{Auth::user()->image}}" class="img-circle" style="width:100px; height:100px;"></a></p>
          <h5 class="centered">{{Auth::user()->name}}</h5>
          <li class="mt">
            <a class="active" href="profile">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-laptop"></i>
              <span>Jobs</span>
            </a>
            <ul class="sub">
              <li>
                <a href="browse-job">
                  <i class="fa fa-search"></i>Browse Jobs
                </a>
              </li>
              <li>
                <a href="jobsApplied">
                  <i class="fa fa-check-square-o"></i>Jobs Appiled
                </a>
              </li>
            </ul>
          </li> 
          <li>     
            <a href="myMail">
              <i class="fa fa-bell"></i>
              <span>Messages</span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cog"></i>
              <span>Settings</span>
            </a>
            <ul class="sub">
              <li><a href="adminLogin"><i class="fa fa-user"> </i> Profile</a></li>
              <li><a href="lock_screen.html"><i class="fa fa-key"> </i> Change Password</a></li>
            </ul>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
    <h3><i class="fa fa-building"></i> <b>My Account</b> <i class="fa fa-angle-right"></i> <i class="fa fa-plus"></i> <b>@yield ('title')</b></h3>
      @yield('content')
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="bottom:0;">
      <div class="text-center">
      <p>All Rights reserved &copy; 2019 | Developed by <i class="fa fa-heart"></i> R.Laveena Year III Semester I, Department of Computing & Information Systems. </p>
   
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('backend/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('backend/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('backend/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('backend/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('backend/lib/jquery.sparkline.js') }}"></script>
  
  <!--common script for all pages-->
  <script src="{{ asset('backend/lib/common-scripts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/gritter-conf.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/jquery.backstretch.min.js') }}"></script>
  <!--script for form page-->
  <script src="{{ asset('backend/lib/sparkline-chart.js') }}"></script>
  <script src="{{ asset('backend/lib/zabuto_calendar.js') }}"></script>
  <script src="{{ asset('backend/lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/bootstrap-daterangepicker/date.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/bootstrap-daterangepicker/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/lib/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
  <script src="{{ asset('backend/lib/advanced-form-components.js') }}"></script>

  
@yield('script')
  
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
  <!--Script for tables-->

</body>

</html>
