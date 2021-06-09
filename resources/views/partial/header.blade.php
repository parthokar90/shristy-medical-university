
<body> 

  <!--START SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>      
  </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <div class="d-flex">
    <header id="mu-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-header-area">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="mu-header-top-left">
                    <div class="mu-top-email">
                      <i class="fa fa-envelope"></i>
                      <span>info@shristyultrasound.com</span>
                    </div>
                    <div class="mu-top-phone">
                      <i class="fa fa-phone"></i>
                      <span>+8801711563737</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="mu-header-top-right">
                    <nav>
                      <ul class="mu-top-social-nav">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                        <li><a href="{{route('login')}}" title="Login"><span class="fa fa-sign-in"></span></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>

  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="{{route('index')}}"><img class="logo-img" src="{{asset('assets/img/logo.png')}}"></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="{{ isset($page) && $page=='index'?'active':'' }}"><a href="{{route('index')}}">Home</a></li>
            <li class="dropdown {{isset($page) && ($page=='about' || $page=='fact')?'active':''}}" >              
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us <span class="caret"></span>
              </a>               
              <ul class="dropdown-menu">
                <li class="{{isset($page) && $page=='about'?'active':''}}"><a href="{{route('about')}}">About Shristy</a></li>
                <li class="{{isset($page) && $page=='fact'?'active':''}}"><a href="{{route('fact')}}">Fact & Figures</a></li>
              </ul>
            </li>
            <li class="{{isset($page) && $page=='faculty'?'active':''}}"><a href="{{route('faculty')}}">Faculty</a></li>           
            <li class="{{isset($page) && $page=='course'?'active':''}}"><a href="{{route('courses')}}">Courses</a></li>
            <li class="{{isset($page) && $page=='gallery'?'active':''}}"><a href="{{route('gallery')}}">Gallery</a></li>
            <li><a class="{{isset($page) && $page=='application'?'active':''}}"  href="{{route('admission')}}">Online Admission</a></li>
            <li><a class="{{isset($page) && $page=='login'?'active':''}}"  href="{{route('login')}}">Online Exam</a></li>
            <li class="{{isset($page) && $page=='appointment'?'active':''}}"><a href="{{route('appointment')}}">Appointment </a></li>
            <li class="{{isset($page) && $page=='contact'?'active':''}}"><a href="{{route('contact')}}">Contact</a></li>          
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>