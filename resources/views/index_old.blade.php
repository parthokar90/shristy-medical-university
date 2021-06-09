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
          <img src="{{asset('assets/img/slider/1.png')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <!-- <h4>Welcome To Varsity</h4>---->
        {{-- <span></span>  --}}
        <h2 style="margin-top: 80px">Welcome to Shristy Ultrasound</h2>
     
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/img/slider/2.png')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
      <!--  <h4>Premiumu Quality Free Template</h4>
        <span></span>-->
        <h2 style="margin-top: 80px">Learn Ultrasound from the best</h2>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/img/slider/3.png')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h2 style="margin-top: 80px">We Provide Knowledge Through Technology</h2> 
      </div>
    </div>
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/img/slider/4.png')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h2 style="margin-top: 80px">We do all high risk pregnancy & vascular Doppler sonography</h2> 
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  {{-- <section id="mu-service">
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
  </section> --}}
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              
              <div class="col-lg-4 col-md-4 " style="float: left">
                <div class="bg-about2">
                <div class="about-title" style="color: white">Learn Online</div>
                <div class="mu-about-us-left bg-about-body">
                  <div class="mu-title bg-default about-body-title">
                    ULTRASOUND TRAINING REGULAR AND ONLINE COURSE                                
                  </div>
                  <div class="about-body">
                    Apart from our regular on-site delivery of One year Diploma program, we have started Online one year Diploma in Medical Ultrasound course which is intended for those foreign and local students who want to learn ultrasound for the first time or upgrade their current ultrasound knowledge and skill from the best place but have not enough time to attend a regular course. However, this program is blended with online didactic course plus two month onsite hands-on training at our school site.  
                  </div>
                <a href="{{route('courseDetails',1)}}"><div class="about-read-more">.....read more</div></a>
                </div>
              </div>
              </div>

              <div class="col-lg-4 col-md-4 ex-teacher" style="float:left">
                <div class="bg-about1">
                <div class="about-title" >Expert Teachers</div>
                <div class="mu-about-us-left bg-about-body">
                  <div class="mu-title bg-default about-body-title">
                    ULTRASOUND TRAINING FROM INTERNATIONALLY ACCLAIMED INSTRUCTORS             
                  </div>
                  <div class="about-body">
                    Shristy Ultrasound’s faculty are all leading experts in ultrasound profession and majority of faculties are American & Canadian licensed Instructor. With many years of experience, our faculty have authored numerous lecture notes and articles, relating to all ultrasound specialty topics. Shristy Institute’s faculty are also engaged in activities designed to improve teaching methodology, to ensure the best education and hands-on training offered are consistent with current international standard.                                      
                  </div>
                <a href="{{route('faculty')}}"><div class="about-read-more">.....read more</div></a>
                </div>
              </div>
              </div>

              <div class="col-lg-4 col-md-4 " style="float: left">
                <div class="bg-about3">
                <div class="about-title" style="color: white">Best Classroom</div>
                <div class="mu-about-us-left bg-about-body">
                  <div class="mu-title bg-default about-body-title">
                    ULTRASOUND TRAINING WITH BEST CLASSROOM & INFRASTUCTURE             
                  </div>
                  <div class="about-body">
                    Shristy’s Ultrasound education and training facility is equipped with One large lecture class room with broadband internet smart TV, multimedia, One conference type class room and four state-of-arts “Sonolab” for hands-on training with 10 high end ultrasound equipments and free Wi-Fi campus for all. Our facility is housed in 9th floor of a 14 story modern commercial building in Dhanmondi, in the city center of Dhaka, capital city of Bangladesh.<br>   <br>                                     
                  </div>
                <a href="{{route('contact')}}"><div class="about-read-more">.....read more</div></a>
                </div>
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
                  <h4 class="counter">{{$visitor}}</h4>
                  <p>Visitor</p>
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
                  <h4 class="counter">4</h4>
                  <p>Modern Lab</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4 class="counter">8</h4>
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
              <h2>Our Featured Courses</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p> -->
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                @foreach ($courses as $item)                  
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                  <span class="{{$item->homeIcon}}"></span>
                    <h4>{{$item->homeName}}</h4>
                    <p>{{ Str::words($item->short_details,30) }}</p>
                  <a class="btn btn-warning" href="{{route('courseDetails',$item->id)}}">
                    Read More</a>
                  </div>
                </div>
                @endforeach
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
              @php 
              $i=1;
              @endphp
              @foreach ($latests as $item)              
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="{{route('courseDetails',$item->id)}}"><img src="{{asset('backend/course/'.$item->image)}}" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="{{route('courseDetails',$item->id)}}">{{$item->course_name}}</a>
                      <span><i class="fa fa-clock-o"></i>{{$item->courseDuration}} Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content lightbg{{$i}}">
                    <h4><a href="{{route('courseDetails',$item->id)}}">Key features - </a></h4>
                    <p>{{$item->keyFeatures}}</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details font-weight-bold" href="{{route('courseDetails',$item->id)}}">More details…</a>
                      {{-- <a class="mu-course-price" href="{{route('courseDetails',$item->id)}}">${{$item->costing}}</a> --}}
                    </div>
                  </div>
                </div>
              </div>    
              @php 
              $i++;
              @endphp
              @endforeach
            </div> 
            <!-- End latest course content -->

            <!-- new content start -->


            <!-- end --->
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
              <h2>Our Principal Mentors</h2>
              <p>Shristy Institute’s teaching staff is a group of experienced Sonologists led by its founder CEO & Program Director Dr. Mohammad Akhter Hossain. We have 6 other resident academic staff consists of local & foreign teachers. Dr. Hugh Anthony Ellis from Canada is working with us as Adviser and Visiting Clinical Instructor via our program linked with Institute of Ultrasound Technique (IUT), Canada, who supervises all of our program development and conducts Advance Diploma program with hands-on training at our site.</p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3  col-sm-6">
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
                    </div>
                  </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3 col-sm-6">
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
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-3 col-sm-6">
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
                    </div>
                  </div>
                </div> --}}
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
              <h2>Center for Advanced Fetal Maternal & Vascular Sonography</h2>
              <p>Ultrasound scanning is a noninvasive, accurate, and cost-effective method to create images of the female reproductive tract clinically and in research.</p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-4" style="padding-right: 5px">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/fetal/1.png')}}" alt="teacher img" style="height:300px">
                    </figure>                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 " style="padding:0px">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/fetal/2.png')}}" alt="teacher img" style="height:300px">
                    </figure>                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4" style="padding-left: 5px">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="{{asset('assets/img/fetal/3.png')}}" alt="teacher img" style="height:300px">
                    </figure>                    
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
                    <p>I am so thrilled to have come across this course. The whole course content is delivered in a very professional and clean look and easily understandable way. I have learnt a lot and this course gave me a fabulous start.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/1.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Dr. Ayesha Akhter</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>The Foundation of Basic ultrasound, Vascular Doppler Sonography and Fetal anomaly scan with Shristy ultrasound has definitely met all my expectations.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/2.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Dr. Mahnaz Haq</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>It was a very informational, exciting and dynamic experience, with a lot of learning potential both theoretically and practically.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/3.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Dr. Shamim Rima </h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>An amazing course in medical ultrasound. The learning platform was the game changer. So well laid out, it allowed me to learn a good understanding prior to the hands-on scanning sessions.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/4.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Prof. Dr. Sahedul Islam Kaowsar</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>I had an opportunity to study ultrasound at Shrist institute, and looking at what they offer, I personally felt it was a gaining ground in the Morden imaging science especially as technology levels soars in the fraternity.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/5.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Mills Masiwa </h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>I am a Lecturer and Chief Consultant Radiologist in a Nigerian University Teaching Hospital. I want to improve my Vascular Doppler & MSK Sonography skill.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/6.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Dr. Hameed Mohammad </h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>I am thankful to Shristy Institute for giving me the great opportunity to upgrade my profession with Diploma in Medical Sonography credential from this school. </p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/7.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Mindu Zangmo</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Shristy Institute is a leading ultrasound education provider for healthcare professionals in South Asia.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/8.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Carma Jigel</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>t’s a great opportunity for me to study Ultrasound in Shristy Institute of Health Sciences, Dhaka, Bangladesh in 2018. Shristy Ultrasound is a top most institute not only in Bangladesh, but also in South Asia region</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/9.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Tilak Raj khanal</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Studying at the Shristy Institute has been a fantastic experience. Three things that have made really rewarding: the multicultural environment.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/10.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Dr Liban Hassan Mohamud</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>As a Cardiovascular Surgeon, I was looking for a course in Vascular Doppler Sonography and Echocardiography. </p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('assets/img/testimonial/11.jpg')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Dr. Md. Badrul Alam </h4>
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
              <h2>Latest Notice</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p> -->
            </div>
            <!-- end title -->  
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">
                @foreach ($notices as $item)                    
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                    <a href="{{route('notice',$item->id)}}"><img src="{{asset('backend/notice/'.$item->image)}}" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="{{route('notice',$item->id)}}">{{ $item->title }}</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="{{route('notice',$item->id)}}">{{ $item->created_at }}</a>
                    </div>
                    <div class="mu-blog-description">
                      {!! str_limit(strip_tags($item->details), 180) !!}
                      <a class="mu-read-more-btn" href="{{route('notice',$item->id)}}">Read More</a>
                    </div>
                  </article>
                </div>
                @endforeach
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