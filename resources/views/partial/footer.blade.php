 <!-- Start footer -->
 <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row"> 
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="{{route('about')}}">About Us</a></li>
                  <li><a href="{{route('mission')}}">Mission & Vision</a></li>
                  <li><a href="{{route('courses')}}">Course</a></li>
                  <li><a href="{{route('teaching')}}">Teaching Principles</a></li>
                  <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                <li><a href="{{route('testimonial')}}">Testimonial</a></li>
                <li><a href="{{route('admission')}}">Online Admisison</a></li>
                  <!-- <li><a href="#">Latest Course</a></li> -->
                 <li><a href="{{route('notices')}}">Notice board</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Suite # C-9, Level – 9 </p>
                  <p>Green Rowshanara Tower</p>
                  <p>55,Satmasjid Road,Dhanmondi</p>
                  <p>Telephone:   +88-02-58152221</p>
                  <p>Cell phones:   +88-01552-441121</p>
                  <p>E-mail:  drakhter58@yahoo.com</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="http://innovative.com.bd/" rel="nofollow">ITE</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="{{asset('assets/js/slick.')}}js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{asset('assets/js/waypoints.')}}js"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.counterup.js')}}"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.mixitup.')}}js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{asset('assets/js/jquery.fancybox.pack.')}}js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

  
  <!-- Custom js -->
  <script src="{{asset('assets/js/custom.js')}}"></script> 
  
  <script>
    $('.datepicker').datepicker({
      todayHighlight: true,      
      minDate: 0,
      maxDate: "+1M +10D",
      format: "dd/mm/yyyy",
    clearBtn: true,
    });
</script>
@yield('js')
  </body>
</html>