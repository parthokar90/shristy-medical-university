@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Testimonial</h2>
            <ol class="breadcrumb">
             <li><a href="{{route('index')}}">Home</a></li>            
             <li class="active">Testimonial</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->
  <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-course-content-area">
             <div class="row">
               <div class="col-md-12">
                 <!-- start course content container -->
                 <div class="mu-course-container mu-blog-archive">
                   <div class="row">
                     <div class="col-md-6 col-sm-6">
                       <article class="mu-blog-single-item">
                         <figure class="mu-blog-single-img text-center">
                           <a href="#"><img src="{{asset('assets/img/testimonial/1.jpg')}}" alt="img" style="width:200px;"></a>
                           <figcaption class="mu-blog-caption">
                             <h3><a href="#">Dr. Ayesha Akhter </a></h3>
                           </figcaption>                      
                         </figure>
                         <div class="mu-blog-meta">
                           <span>
                          I am so thrilled to have come across this course. The whole course content is delivered in a very professional and clean look and easily understandable way. I have learnt a lot and this course gave me a fabulous start. Shristy ultrasound’s teachers did a great job.....
                        </span>
                       <!--  <span style="width: 100%">
                          <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                        </span> -->
                          
                         </div>
                         <div class="mu-blog-description">
                          Dr. Ayesha Akhter <br>
                          MBBS, DMU (Shristy), RDMS (OBGYN) <br>
                          Program Manager, NCDC and  Assistant Director, DGHS,  MoH&FP,  <br>
                          Consultant Sonologist, Universal Medical College Hospital, Dhaka <br>
                         </div>
                       </article> 
                     </div>                  
                                      
                     <div class="col-md-6 col-sm-6">
                       <article class="mu-blog-single-item">
                         <figure class="mu-blog-single-img text-center">
                           <a href="#"><img src="{{asset('assets/img/testimonial/2.jpg')}}" alt="img" style="width:200px;"></a>
                           <figcaption class="mu-blog-caption">
                             <h3><a href="#"> Dr. Mahnaz Haq </a></h3>
                           </figcaption>                      
                         </figure>
                         <div class="mu-blog-meta">
                           <span>
                            The Foundation of Basic ultrasound, Vascular Doppler Sonography and Fetal anomaly scan with Shristy ultrasound has definitely met all my expectations. The clinical lab and hands-on lessons are being taught by highly professional and skilled faculties. .....
                        </span>
                       <!--  <span style="width: 100%">
                          <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                        </span> -->
                          
                         </div>
                         <div class="mu-blog-description">
                          Dr. Mahnaz Haq <br>
                          MD (Radiology & Imaging), DMU, ADMS (Shristy),  <br>
                          Consultant Radiologist and Sonologist, <br>
                          Medinova Medical Services Ltd., Dhaka <br>
                          e-mail: mahnazhaq@yahoo.com <br>

                         </div>
                       </article> 
                     </div>   
                     <div class="col-md-6 col-sm-6">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img text-center">
                          <a href="#"><img src="{{asset('assets/img/testimonial/3.jpg')}}" alt="img" style="width:200px;"></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a href="#">Dr. Shamim Rima  </a></h3>
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                          <span>
                           It was a very informational, exciting and dynamic experience, with a lot of learning potential both theoretically and practically. I would recommend the courses in all ultrasound specialities, specially the basic diploma program, to everyone who wants to get benefit from ultrasound diagnostics …
                       </span>
                    <!--    <span style="width: 100%">
                         <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                       </span> -->
                         
                        </div>
                        <div class="mu-blog-description">
                         Dr. Shamim Rima <br>
                         MBBS, MPhil (Radiology & Imaging), DMU (Shristy), <br>
                         Radiologist & Sonologist & Assistant Professor in Radiology, <br>
                         Anwar Khan Modern Medical College, Dhaka <br>
                         e-mail: drshamimrima@yahoo.com <br>
                         
                        </div>
                      </article> 
                    </div>                
                     <div class="col-md-6 col-sm-6">
                       <article class="mu-blog-single-item">
                         <figure class="mu-blog-single-img text-center">
                           <a href="#"><img src="{{asset('assets/img/testimonial/4.jpg')}}" alt="img" style="width:200px;"></a>
                           <figcaption class="mu-blog-caption">
                             <h3><a href="#">Prof. Dr. Sahedul Islam Kaosar  </a></h3>
                           </figcaption>                      
                         </figure>
                         <div class="mu-blog-meta">
                           <span>
                            An amazing course in medical ultrasound. The learning platform was the game changer. So well laid out, it allowed me to learn a good understanding prior to the hands-on scanning sessions. 
                        </span>
                       <!--  <span style="width: 100%">
                          <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                        </span> -->
                          
                         </div>
                         <div class="mu-blog-description">
                          Prof. Dr.  Sahedul Islam Kaowsar <br>
                          President BMA, GS-SwaChiP, Feni, <br>
                          Consultant Sonologist <br>
                          e-mail:  drkaosarfeni@gmail.com <br>                                                    
                         </div>
                       </article> 
                     </div>                  
                    
                  <div class="col-md-12 text-center text-danger">
                    <h2>Testimonials from our Foreign Students…….</h2>
                  </div>
                  <div class="col-md-12 text-center">
                    <h4>From United Kingdom</h4>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img text-center">
                        <a href="#"><img src="{{asset('assets/img/testimonial/5.jpg')}}" alt="img" style="width:200px;"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Mills Masiwa</a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <span>
                          I had an opportunity to study ultrasound at Shrist institute, and looking at what they offer, I personally felt it was a gaining ground in the Morden imaging science especially as technology levels soars in the fraternity. With a Post Graduate Diploma that I obtained at Shristy institute, I have been able to perform vascular ultrasound at NHS University hospital in the Uk..
                     </span>
                     <!-- <span style="width: 100%">
                       <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                     </span> -->
                       
                      </div>
                      <div class="mu-blog-description">
                        Mills Masiwa <br>
                        Bsc RT, PG DMU (Shristy Institute), <br>
                        MSc -Vascular Sonography, Basildon University, Essex <br>
                        Vascular Sonographer, NHS University Hospital, UK <br>
                        e-mail: mcmillsbw@yahoo.com <br>                                                                          
                      </div>
                    </article> 
                  </div>  

                  <div class="col-md-12 text-center">
                    <h4>From Nigeria </h4>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img text-center">
                        <a href="#"><img src="{{asset('assets/img/testimonial/6.jpg')}}" alt="img" style="width:200px;"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Dr. Hameed Mohammed</a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <span>
                          I am a Lecturer and Chief Consultant Radiologist in a Nigerian University Teaching Hospital. I want to improve my Vascular Doppler & MSK Sonography skill. I found Shristy ultrasound, a center of excellence in hands-on training in Vascular Doppler and MSK sonography. 
                     </span>
                     <!-- <span style="width: 100%">
                       <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                     </span> -->
                       
                      </div>
                      <div class="mu-blog-description">
                        Dr. Hameed Mohammad <br>
                        Chief Consultant Radiologist & Lecturer in Radiology,<br>
                        Benue University Teaching Hospital,  Makurdi, Benue State, Nigeria <br>
                        e-mail: Hameed.mohammad@gmail.com <br>
                                                                                                
                      </div>
                    </article> 
                  </div>  

                  <div class="col-md-12 text-center">
                    <h4>From Bhutan…. </h4>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img text-center">
                        <a href="#"><img src="{{asset('assets/img/testimonial/7.jpg')}}" alt="img" style="width:200px;"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Mindu Zangmo</a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <span>
                          I am thankful to Shristy Institute for giving me the great opportunity to upgrade my profession with Diploma in Medical Sonography credential from this school. The course content of Shristy ultrasound in didactic, hands-on training, interpretation and report writing, training in Vascular Doppler and Transvaginal scanning were all very extensive, thoughtful and applicable to make a strong foundation. It provides actionable knowledge and practical skills which are relevant and applicable in workplace. I am deeply inspired and encouraged especially by Dr. Akhter sir, to apply the skills in my daily practice in my hospital for the benefits of my profession as well as better healthcare of peoples of Bhutan. 
                     </span>
                     <!-- <span style="width: 100%">
                       <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                     </span> -->
                       
                      </div>
                      <div class="mu-blog-description">
                        Mindu Zangmo <br>
                        Radio-Sonographer, Dewathang Military Hospital <br>
                        Ministry of Health, Royal Goverment of Bhutan <br>
                        E-mail: minzangmo@gmail.com <br>
                        
                                                                                                
                      </div>
                    </article> 
                  </div>  
                  <div class="col-md-6 col-sm-6">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img text-center">
                        <a href="#"><img src="{{asset('assets/img/testimonial/8.jpg')}}" alt="img" style="width:200px;"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Carma Jigel</a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <span>
                          Shristy Institute is a leading ultrasound education provider for healthcare professionals in South Asia. I found Shristy’s Diploma in Medical Ultrasound program extremely beneficial for advancement of my carrier as Radio-Sonographer. I am deeply indebted to our human resource department of Ministry of Health, Bhutan for sending us to Shristy Institute for training in advance level ultrasound who has definitely met our all expectation. They have highly professional and skilled teacher with excellent lab and learning atmosphere. 
                     </span>
                     <!-- <span style="width: 100%">
                       <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                     </span> -->
                       
                      </div>
                      <div class="mu-blog-description">
                        Carma Jigel <br>
                        Radio-Sonographer, Dewathang Military Hospital <br>
                        Ministry of Health, Royal Goverment of Bhutan <br>
                        E-mail: minzangmo@gmail.com <br>
                        
                                                                                                
                      </div>
                    </article> 
                  </div>  
                  
                  <div class="col-md-12 text-center">
                    <h4>From Nepal….. </h4>
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img text-center">
                        <a href="#"><img src="{{asset('assets/img/testimonial/9.jpg')}}" alt="img" style="width:200px;"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Tilak Raj Khanal </a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <span>
                          It’s a great opportunity for me to study Ultrasound in Shristy Institute of Health Sciences, Dhaka, Bangladesh in 2018.  Shristy Ultrasound is a top most institute not only in Bangladesh, but also in South Asia region. It provided me in-depth knowledge in medical sonography both in didactic part and one-to-one hands-on practical training. The standard of course curriculum and scanning protocol are same as North American protocol. 
                     </span>
                     <!-- <span style="width: 100%">
                       <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                     </span> -->
                       
                      </div>
                      <div class="mu-blog-description">
                        Tilak Raj khanal <br>
                        BSc in Radiology, PG DMU (Shristy), MBA, M.ED (Health Education) <br>
                        Supervisor (Ultrasound & Radiology Imaging Department) <br>
                        United Mission Hospital, Tanse Palpa, Nepal <br>
                        e-mail: tilak1969.trk@gmail.com <br>
                                                                     
                      </div>
                    </article> 
                  </div>  

                  <div class="col-md-12 text-center">
                    <h4>From Somalia </h4>
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img text-center">
                        <a href="#"><img src="{{asset('assets/img/testimonial/10.jpg')}}" alt="img" style="width:200px;"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Dr. Liban Hasan Mohamud </a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <span>
                          Studying at the Shristy Institute has been a fantastic experience. Three things that have made really rewarding: the multicultural environment, you can really expect to work together with people from all parts of the world, quality teaching and the facilities, the teaching staff includes ultrasound professionals and highly regarded teachers and trainers and wonderful campus experience. To be able to undertake a diploma that I feel genuinely passionate about and has been a rewarding experience. 
                     </span>
                     <!-- <span style="width: 100%">
                       <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                     </span> -->
                       
                      </div>
                      <div class="mu-blog-description">
                        Dr Liban Hassan Mohamud <br> 
                        MBBS, MPH (Hospital management), PGDMU (Shristy) <br>
                        Hospital director and Sonologist  <br>
                        Jazeera University Hospital @ Mogadishu Somalia <br>
                        e-mail: libaanx.gmail.com <br>
                                                
                      </div>
                    </article> 
                  </div>  

                  <div class="col-md-12 text-center text-danger">
                    <h2>Testimonial from Shristy Alumni for Specialty Courses in Ultrasound</h2>
                  </div>
                  <div class="col-md-12 text-center">
                    <h4>From USA  </h4>
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img text-center">
                        <a href="#"><img src="{{asset('assets/img/testimonial/11.jpg')}}" alt="img" style="width:200px;"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#"> Dr. Md. Badrul Alam  </a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <span>
                          As a Cardiovascular Surgeon, I was looking for a course in Vascular Doppler Sonography and Echocardiography. Shristy ultrasound met my expectation. In a very short time, they customized the courses for me, taught me everything in a very relaxed and fun mood, that when I emigrate to USA, I passed the American Registry Examination (ARDMS) on the subjects straightway and got job placement…..
                     </span>
                     <!-- <span style="width: 100%">
                       <a class="mu-read-more-btn text-center btn-primary"  href="#" >Read More</a>
                     </span> -->
                       
                      </div>
                      <div class="mu-blog-description">
                        Dr. Md. Badrul Alam <br>
                        Ex Assistant Professor & Cardiac Surgeon <br>
                        National Institute for Cardiovascular Diseases (NICVD) <br>
                        Now living in USA <br>
                        
                      </div>
                    </article> 
                  </div>  



                 </div>
                 <!-- end course content container -->                 
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
@endsection