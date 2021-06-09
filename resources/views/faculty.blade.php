@extends('layouts.master')
@section('title',$title)
@section('content')
<style>
  .card {
    font-size: 1em;
    overflow: hidden;
    border: none;
    margin-top: 20px;
    border-radius: .28571429rem;
}

.card-block {
    font-size: 1em;
    position: relative;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    text-align: center;
}
.card-section{
  background: aliceblue;
  height: 704px;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    text-align: center;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

ul
{
  list-style-type: disc;
  margin-left:15px
}
.doctorFigName{
  font-weight: bold;
  font-size:1.2em;
  background: orange;
  color:black;
  padding: 0 20px;
}
</style>
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Faculties and Support Facilities</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>            
           <li class="active">Faculties and Support Facilities</li>
         </ol>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- End breadcrumb -->
<section id="mu-our-teacher">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="mu-our-teacher-area">
         <!-- begain title -->
         <div class="mu-title">
           <h2>OUR FACULTIES</h2>
           <p>
           Shristy Institute’s teaching staff is a group of highly experienced Physician Sonologists led by its founder & Program Director Dr. Mohammad Akhter Hossain. </p><p>
            Our International visiting faculty Dr. Hugh A. Ellis from Canada is working with us as Adviser and Visiting Clinical Instructor who advices and supervises all of our program development and conducts Advance Diploma program with direct hands-on training at our site since 2003. 
          </p>
        </div>
        <!-- end title -->
        <!-- begain our teacher content -->
              
        <div class="card-deck">
          @foreach($faculties as $faculty)
          <div class="card col-md-6">
            <div class="card-section">
            <img class="card-img-top text-center" src="{{asset('backend/faculty/'.$faculty->image)}}" alt="Faculty Image" style="height: 280px;width:40%;margin-left:30%">
            <div class="card-body">
              <h5 class="card-title">{{$faculty->name}}</h5>
              <p class="card-text">{!! $faculty->doctorTitle !!}</p>
            </div>
            
            <div class="card-footer">             
                <small class="text-muted"><a href="{{route('doctor-profile',$faculty->id)}}" class="btn btn-primary">Read more....</a></small>               
            </div>
            
          </div>
        </div>
         @endforeach
        </div>

     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-md-12 h2 text-primary">Support facilities</div>
   <div class="col-md-12">
     Shristy Institute is recognized as the leader in continuing medical education within the ultrasound medical community. Since 2000, Shristy Ultrasound has offered ultrasound education for over 2200 medical professionals from home and abroad. Continuing Medical Education opportunities include live, <b>comprehensive didactic and hands-on ultrasound programs, ARDMS registry preparation programs, workshops, seminars, online blended-education programs</b> (combination of online course(s) and direct hands-on training. 
     <br>
     <br>
     Shristy Ultrasound offers customized one-on-one blended education providing the individual the ultimate learning and hands-on scanning experience with cost-effective education, and most importantly consistency in training to successfully integrate ultrasound protocols into the clinical setting.

   </div>
 </div>
 <div class="row">
   <div class="col-md-12 h2 text-primary">Infrastructure</div>
   <div class="col-md-12">
     <ul >
      <li>	Shristy Institute’s 4 unit “Sonolab” is attached to the center for hands-on.</li>
      <li>	Equipped with 10 units of modern and latest high end ultrasound machines.</li>
      <li>3D/4D imaging, TV/TR, THI, Trapezoidal Imaging, Color Doppler, PW/CW Doppler, Power Doppler & other Diagnostic tools.</li>
      <li>	Direct contact and one-on-one hands-on practical training with live models and real patients. </li>
      <li> 	Broadband free Wi-Fi lab and class rooms.  </li>
      <li>	Cloud based “Tricefy” platform to send or to receive and/or store and study images from our high end Voluson S10 platform. </li>
      <li>	“Tricefy” can also send images to patient’s cell phone with android or iphone platform.          </li>
    </ul>  
  </div>
</div>
<div class="row">
 <div class="col-md-12 h2 text-primary">Lecture Theatre</div>
 <div class="col-md-12">
  One large lecture room and one conference type class room equipped with the multimedia facilities including broadband internet based smart TV, LCD projector, sound speakers & computers with free Wi-Fi.  
</div>
</div>
<div class="row">
 <div class="col-md-12 h2 text-primary">What are the Learning Approaches?</div>
 <div class="col-md-12">
   <ul>
    <li>	One-to-one basis hands-on training on all modalities of ultrasound with live models and real patients. </li>
    <li>	Problem based learning & Self-directed learning.</li>
    <li>	Daily Practical classes on scanning technique & Protocol, Slide interpretation, discussion sessions.</li>
    <li>	Theory classes & class tests, MCQ and written examination and evaluation of scanning techniques and knobology.</li>
    <li>	Clinical training with direct patient contact.</li>
    <li>	High quality Lecture notes on all subjects and speciality ultrasound.</li>
    <li>	Distance learning by teleconferencing, internet, other interactive tools for our foreign and local distant learning students. </li>
    <li>	 In case of Locked down e.g. Covid-19 or strike situation, online classes via teleconferencing. </li>
  </ul>          
</div>
</div>
<div class="row" style="margin:20px 0">
 <div class="col-md-12 text-center"><img src="{{asset('assets/img/faculty/never_stop_learning.png')}}" alt=""></div>
</div>

<div class="row">
  <div class="col-md-12 h2">“Learning Never Stops”</div>
  <div class="col-md-12">
    As part of our relentless effort for Continuous Medical Education, under the leadership of Dr. Mohammad Akhter Hossain, Shristy Institute is organizing International congress, seminars, workshops and training sessions frequently to upgrade current status of our physicians and Sonologists. 
    <br>
    <br>

    Shristy Institute organized the following international congresses & workshops: <br>
    <br>
    <ul>
      <li>
        <u><b> 2017 Dec: </b></u>
      </li>
    

    <li> International ISUOG Dhaka Congress on advances in OBGYN ultrasound jointly with International Society of Gynecology and Obstetrics (ISUOG) held on 8th-9th Dec, 2017 in Radisson Blu Water Garden Hotel, Dhaka. 
    520 delegates attended in this congress.
      <br>
      <br>
    Internationally acclaimed resource persons were present as speaker including Dr. Akhter from Bangladesh. International faculties were: 
<br>
<br>
<ol>
  <li><b> Prof. Dr. CM Bilardo,</b> President of ISUOG and Professor in Fetal Medicine and OBGYN in UMCG, Netherland.</li> <br>
  <li><b>Prof. Dr. Aris T. Papageorghiou,</b> Secretary and Board member of ISUOG (2018) and Professor in Fetal medicine in St. George’s Hospital Medical School, London, UK. He is also editor of British Journal of Ultrasound in Obstetrics and Gynecology. </li>  <br>
  <li><b>Dr. Prashant Acharya,</b> Consultant in Fetal medicine & High-risk Obstetric Care, Advance Center for Fetal Medicine, Ahmedabad, India, Executive committee member & Permanent trustee of Indian Society of Ultrasound in OBGYN (INSUOG), Board member of ISUOG.</li>  <br>
  <li><b>Dr. Mala Sibal,</b> Consultant Fetal medicine and OGBYN in Manipal Hospital, Bangaluru, India and International faculty and trainer for International Ovarian Tumor Analysis (IOTA-Europe) for Asia pacific region, Head of Gynecology Academy, a online portal for education in Gynecology ultrasound and author of :Gynecology Ultrasound – An Atlas and Guide” published by Elsevier. </li> 
</ol>
  </li>
</ul>
    </div>
    <div class="col-md-12" style="margin-top: 20px">
      <div class="col-md-3 text-center" style="height: 350px">
        <img src="{{asset('assets/img/faculty/aris.png')}}" alt="" style="height: 90%;width:100%">
        <span class="doctorFigName">Prof. Aris</span>
      </div>
      <div class="col-md-3 text-center" style="height: 350px">
        <img src="{{asset('assets/img/faculty/bilardo.png')}}" alt="" style="height: 90%;width:100%">
        <span class="doctorFigName">Prof. CM Bilardo</span>
      </div>
      <div class="col-md-3 text-center" style="height: 350px">
        <img src="{{asset('assets/img/faculty/acharya.png')}}" alt="" style="height: 90%;width:100%">
        <span class="doctorFigName">Dr. P. Acharya</span>
      </div><div class="col-md-3 text-center" style="height: 350px">
        <img src="{{asset('assets/img/faculty/sibal.png')}}" alt="" style="height: 90%;width:100%">
        <span class="doctorFigName">Dr. Mala Sibal </span>
      </div>
    </div>
    			
<div class="col-md-12">
<ul>
    <li>
    <u><b> 2018 Aug:</b></u> </li><br> 

    <li> One day workshop and Training on Ovarian Tumor Analysis with IOTA protocol and certification for the successful delegates from IOTA-Europe, Sponsored by Shristy Institute at Dhaka. <br>
<br>
    <b> Dr. Mala Sibal,</b> IOTA designated faculty and trainer was the resource person, trained 140 local Sonologists and Radiologist in IOTA protocol for International Ovarian Tumor Analysis.      </li><br> 

    <li>
      <u><b> 2019 Feb:</b></u> </li><br> 

    <li> Two day Congress on OBGYN ultrasound and Workshop on IOTA-Europe protocol sponsored by Shristy Institute at Dhaka <br>
      <br>
    <b> Dr. Mala Sibal</b> and <b> Dr. Sonal Panchal</b> from India and <br>
    <b> Dr. Mohammad Akhter Hossain </b> were the resource person and speaker. <br>
    In this workshop also we have trained 200 sonologists and radiologist in IOTA ovarian tumor analysis protocol. </li>
  </ul>
</div>
    <div class="col-md-12 text-center"  style="margin-top:20px">       
      <div class="col-md-4 text-center" style="height: 350px;">
        <img src="{{asset('assets/img/faculty/sibal.png')}}" alt="" style="height: 90%;width:100%">
        <span class="doctorFigName">Dr. Mala Sibal </span>
      </div>
      <div class="col-md-4 text-center" style="height: 350px;">
        <img src="{{asset('assets/img/faculty/panchal.png')}}" alt="" style="height: 90%;width:100%">
        <span class="doctorFigName">Dr. Sonal Panchal</span>
      </div>

      <div class="col-md-4 text-center" style="height: 350px;">
        <img src="{{asset('assets/img/faculty/akther.jpg')}}" alt="" style="height: 90%;width:100%">
        <span class="doctorFigName">Dr. Akhter Hossain </span>
      </div>

    </div>
          
<div class="col-md-12">

<ul>
  <li>
    <u><b>2019 Nov: </b></u>
  </li>

    

    <li> <b>Two day workshop on Interventional Ultrasound with live demonstration </b>
    held in Institute of Nuclear Medicine & Allied sciences, Dhaka Medical College campus, on 16-17 Dec, 2019, sponsored by Shristy Institute.  <br>

    <b>Dr. Visal Kumat,</b> an eminent interventional radiologist from India was resource person and trained 120 delegates from Bangladesh in interventional sonography with hands-on live demonstration in INMAS auditorium, Dhaka Medical College campus.</li>
  </ul>

  </div>
</div>
<div class="col-md-12 text-center" style="margin-top: 20px">
  <div style="width: 100%">
    
  
  <img src="{{asset('assets/img/faculty/workshop10.jpg')}}" alt="" style="height: 400px;width: 70%">
  </div>
  <span class="doctorFigName" style="width: 100%;text-align: center">Dr. Visal Kumat in action in Interventional Ultrasound Workshop</span>
</div>
</div>
</section>

@endsection