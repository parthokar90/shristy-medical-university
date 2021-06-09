@extends('layouts.master')
@section('title',$title)
@section('content')
  
  <!-- End search box -->
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/img/slider/1.jpg')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To Varsity</h4>
        <span></span>
        <h2>We Will Help You To Learn</h2>
       <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a> -->
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/img/slider/2.jpg')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Premiumu Quality Free Template</h4>
        <span></span>
        <h2>Best Education Template Ever</h2>
       <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a> -->
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/img/slider/3.jpg')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Exclusivly For Education</h4>
        <span></span>
        <h2>Education For Everyone</h2>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a> -->
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Learn Online</h3>
              <p>This course is also intended for those who wants to seek job abroad and/or for those who wants to emigrate to USA, Canada or elsewhere and starts.</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Expert Teachers</h3>
              <p>MBBS,MD or equivalent degree in Medicine.Bachelor of Homeopathic Medicine from any recognized university.Bachelor of Ayurvedic Medicine !</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Best Classrooms</h3>
              <p>In addition to the secondary & tertiary level hospitals/clinics throughout Bangladesh, many of our graduates with DMU are working in Saudi Arabia, Oman, Kuwait, Nepal etc!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>About Us</h2>              
                  </div>
                  <!-- End Title -->
                  <p>Shristy Institute aims to provide the best quality of healthcare through technology in home and abroad. Our current aim is to develop a group of internationally qualified tertiary level Sonologists & Sonographers through our one year intensive Diploma program. We are committed to helping medical professionals keep up with and benefit from the rapid changes in healthcare today and in the future. We have already trained students from Nepal, India, Saudi Arabia, Kuwait, Oman, USA & Canada. Many of our graduates already received globally recognized RDMS, RVT & RDCS credentials in diagnostic Sonography from ARDMS-USA and working in USA & Canada..</p>
               <!--    <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Saepe a minima quod iste libero rerum dicta!</li>
                    <li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
                    <li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
                    <li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                  <img src="{{asset('assets/img/about-us.jpg')}}" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">568</h4>
                  <p>Subjects</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">3500</h4>
                  <p>Students</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-flask"></span>
                  <h4 class="counter">65</h4>
                  <p>Modern Lab</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4 class="counter">250</h4>
                  <p>Teachers</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Our Features</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p> -->
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4>Professional Courses</h4>
                    <p>The objective of this one-year duration PG Diploma course is to produce advanced standing Sonologist and/or Sonographers through a very intensive and more detail.</p>
                    <button type="button" class="btn btn-warning">Read More</button>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>Expert Teachers</h4>
                    <p>MBBS,MD or equivalent degree in Medicine.Bachelor of Homeopathic Medicine from any recognized university.Bachelor of Ayurvedic Medicine from any </p>
                    <button type="button" class="btn btn-warning">Read More</button>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>PG Diploma Course</h4>
                    <p>NEBOSH National Diploma in Occupational Health and Safety The Shristy Institute Diploma is the “Gold Standard” in health and safety qualifications.</p>
                    <button type="button" class="btn btn-warning">Read More</button>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-microphone"></span>
                    <h4>Breast Ultrasound</h4>
                    <p>This course is also intended for those who wants to seek job abroad and/or for those who wants to emigrate to USA, Canada or elsewhere and starts.</p>
                    <button type="button" class="btn btn-warning">Read More</button>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-film"></span>
                    <h4>Diploma Course (2 Years)</h4>
                    <p>In addition to the secondary & tertiary level hospitals/clinics throughout Bangladesh, many of our graduates with DMU are working in Saudi Arabia, Oman, Kuwait, Nepal etc.</p>
                    <button type="button" class="btn btn-warning">Read More</button>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-certificate"></span>
                    <h4>Professional Certificate</h4>
                    <p>Many of our graduates have taken the RDMS, RVT, RDCS registry/license examination, with a success rate of almost 100% and are now doing job in USA/Canada.</p>
                    <button type="button" class="btn btn-warning">Read More</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Latest Courses</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p> -->
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="{{asset('assets/img/courses/1.jpg')}}" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Vascular Doppler Ultrasound</a>
                      <span><i class="fa fa-clock-o"></i>90Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Key features.</a></h4>
                    <p>Vascular Doppler Ultrasound courses are delivered with a main focus on the acquisition of basic practical skills on scanning techniques and protocols with AIUM/ARDMS standard protocol.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="{{asset('assets/img/courses/2.jpg')}}" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Basic Abdominal Ultrasound</a>
                      <span><i class="fa fa-clock-o"></i>75Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Key features.</a></h4>
                    <p>Basic Abdominal Ultrasound or General Medicine ultrasound courses are delivered with a main focus on the acquisition of basic practical skills on scanning techniques and protocols .</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="{{asset('assets/img/courses/3.jpg')}}" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Follicle Tracking</a>
                      <span><i class="fa fa-clock-o"></i>45Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Key features.</a></h4>
                    <p>It is a 3 days ultrasound course for follicle tracking and infertility with both transabdominal and transvaginal examination.skills on scanning techniques and protocols.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="{{asset('assets/img/courses/1.jpg')}}" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Vascular Doppler Ultrasound</a>
                      <span><i class="fa fa-clock-o"></i>90Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Key features.</a></h4>
                    <p>Vascular Doppler Ultrasound courses are delivered with a main focus on the acquisition of basic practical skills on scanning techniques and protocols with AIUM/ARDMS standard protocol.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="{{asset('assets/img/courses/2.jpg')}}" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Basic Abdominal Ultrasound</a>
                      <span><i class="fa fa-clock-o"></i>75Days</span>
                    </figcaption>
                  </figure>
                 <div class="mu-latest-course-single-content">
                    <h4><a href="#">Key features.</a></h4>
                    <p>Basic Abdominal Ultrasound or General Medicine ultrasound courses are delivered with a main focus on the acquisition of basic practical skills on scanning techniques and protocol.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
             <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="{{asset('assets/img/courses/3.jpg')}}" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Follicle Tracking</a>
                      <span><i class="fa fa-clock-o"></i>45Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Key features.</a></h4>
                    <p>It is a 3 days ultrasound course for follicle tracking and infertility with both transabdominal and transvaginal examination.skills on scanning techniques and protocols.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div
            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->

  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Our Teachers</h2>
              <p>Shristy Institute’s teaching staff is a group of experienced Sonologists led by its founder CEO & Program Director Dr. Mohammad Akhter Hossain. We have 6 other resident academic staff consists of local & foreign teachers. Dr. Hugh Anthony Ellis from Canada is working with us as Adviser and Visiting Clinical Instructor via our program linked with Institute of Ultrasound Technique (IUT), Canada, who supervises all of our program development and conducts Advance Diploma program with hands-on training at our site.</p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/teachers/teacher-01')}}.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Dr. Mohammad Akhter Hossain</h4>
                      <span>CEO & Program Director</span>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/teachers/teacher-02')}}.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Dr. Hugh Anthony Ellis</h4>
                      <span>Adviser & Visiting Clinical Instructor</span>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/teachers/teacher-03')}}.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Dr.Sharmin Jahan Suborna</h4>
                      <span>Senior Clinical Instructor & Lecturer (SPI)</span>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/teachers/teacher-04')}}.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Dr. Sultan Ahmed Sikder</h4>
                      <span>Lecturer & Clinical Instructor</span>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End our teacher -->
  <!----start certificate--->
  <section id="mu-our-teacher" style="background: #F0F8FF;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Our Certificate</h2>
              <p>A certification is a third-party attestation of an individual's level of knowledge or proficiency in a certain industry or profession. They are granted by authorities in the field, such as professional societies and universities, or by private certificate-granting agencies.</p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/certificate.jpg"')}} alt="teacher img">
                     <!--  <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div> -->
                    </figure>                    
                   <!--  <div class="mu-ourteacher-single-content">
                      <h4>Dr. Mohammad Akhter Hossain</h4>
                      <span>CEO & Program Director</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                    </div> -->
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/certificate.jpg"')}} alt="teacher img">
                     <!--  <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div> -->
                    </figure>                    
                    <!-- <div class="mu-ourteacher-single-content">
                      <h4>Dr. Hugh Anthony Ellis</h4>
                      <span>Adviser & Visiting Clinical Instructor</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p> 
                    </div> -->
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/certificate.jpg"')}} alt="teacher img">
                      <!-- <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div> -->
                    </figure>                    
                   <!--  <div class="mu-ourteacher-single-content">
                      <h4>Dr.Sharmin Jahan Suborna</h4>
                      <span>Senior Clinical Instructor & Lecturer (SPI)</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                    </div> -->
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/certificate.jpg"')}} alt="teacher img">
                   <!--    <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div> -->
                    </figure>                    
                    <!-- <div class="mu-ourteacher-single-content">
                      <h4>Dr. Sultan Ahmed Sikder</h4>
                      <span>Lecturer & Clinical Instructor</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                    </div> -->
                  </div>
                </div>
              </div>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----end certificate--->

  <!-- Start testimonial -->
  <section id="mu-testimonial">
<h1 class="text-center" style="
    position: inherit;
    z-index: 2;
    color: white;
    margin-bottom: 33px;
    margin-top: -45px;
">Testimonial</h1>
<br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>It is the first institution in Bangladesh and South Asia to provide internationally accredited  with The Michener Institute of Applied Health Technology.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Jesse Tyler Ferguson</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Shristy Institute,a center of excellence, dedicated to education, training and research in diagnostic ultrasound.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial-2.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Chris Sullivan</h4>
                  <span>Happy Parent</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Shristy Institute aims to provide the best quality of healthcare through technology in home and abroad.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial-3.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Christina Milian</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>From Blog</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p> -->
            </div>
            <!-- end title -->  
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="{{asset('assets/img/blog/blog-1')}}.jpg" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">Diploma in Medical Ultrasonography (DMU)</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">By Admin</a>
                      <a href="#">02 June 2016</a>
                      <span><i class="fa fa-comments-o"></i>87</span>
                    </div>
                    <div class="mu-blog-description">
                      <p>This program is intended for all medical doctors and allied health professionals who wish to perform Ultrasonography independently for diagnostic purposes in advance standing or tertiary level..</p>
                      <a class="mu-read-more-btn" href="#">Read More</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="{{asset('assets/img/blog/blog-2')}}.jpg" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">Basic Abdominal Ultrasound.</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">By Admin</a>
                      <a href="#">02 June 2016</a>
                      <span><i class="fa fa-comments-o"></i>87</span>
                    </div>
                    <div class="mu-blog-description">
                      <p>Basic Abdominal Ultrasound or General Medicine ultrasound courses are delivered with a main focus on the acquisition of basic practical skills on scanning techniques and protocols with AIUM/ARDMS standard protocol.</p>
                      <a class="mu-read-more-btn" href="#">Read More</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="{{asset('assets/img/blog/blog-3')}}.jpg" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">Certificate in Echocardiography.</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">By Admin</a>
                      <a href="#">02 June 2016</a>
                      <span><i class="fa fa-comments-o"></i>87</span>
                    </div>
                    <div class="mu-blog-description">
                      <p>State of the art training facility with modern ultrasound equipment ranging from basic machine to High Resolution Color Doppler, PW/CW Doppler and Power Doppler along .</p>
                      <a class="mu-read-more-btn" href="#">Read More</a>
                    </div>
                  </article>
                </div>
              </div>
            </div>     
            <!-- end from blog content   -->   
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->

@endsection