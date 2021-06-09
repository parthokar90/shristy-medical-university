@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Facts & Figures</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>            
           <li class="active">Facts & Figures</li>
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
         <div class="mu-course-container mu-blog-single">
           <article class="mu-blog-single-item">
             <div class="mu-blog-description">
               <h2 class="font-weight-bold">Shristy Institute</h1>
               <h3 class="text-danger"> In Ultrasound education since 2000</h1>

               <h4>Founder & CEO:  Dr. Mohammad Akhter Hossain </h1>
                <p class="text-justify">
                  Working in radiology and imaging since 1992, felt that Bangladesh needs more advance training in ultrasound imaging to provide better diagnostic healthcare, because it is the only imaging modality which can be taken anywhere up to the furthest or remote village and can provide diagnosis in almost all medical specialties. After graduation from The Michener Institute for Applied Health Sciences in Toronto, Canada, became more intrigued by ultrasound programs and way of teaching methodology in The Michener and started to focus on this field of diagnostic imaging education. I asked my mentor and President of the Michener Institute to organize ultrasound course for a group of healthcare professionals in Bangladesh as their affiliated campus in Dhaka in 2000.  That is the beginning of a pilot project with The Michener, that was in 2000, from there the course and reach grew to a global player in diagnostic medical ultrasound courses.
                </p>

                <h3 class="font-weight-bold">Why Shristy?</h1>
                <div >
                  <b>
                    
                  An Excellent Educational Framework
                  </b>
                </div>
                <div>
                  All our courses are up-to-date, evidence-based and interactive. Our innovative learning platform allows for lots of hands-on practice during our courses.
                </div>
                <br>
                <div >
                  <b>
                    
                  International Team
                  </b>
                </div>
                <div>
                  Dr. Hugh Anthony Ellis, a veteran Canadian physician Sonographer and clinical instructor in all sub-specialty of ultrasound with a long 35 years of clinical experience enriches us with his expertise offering annual visit and conducting one month long training in vascular and musculoskeletal ultrasound with new knowledge and technology with fresh perspectives , each year.
                </div>
                <br>
                <div >
                  <b>
                    
                  Passionate Sonographers
                  </b>
                </div>
                <div>
                we’re very passionate sonographers who really love what we do!  This enthusiasm is highly contagious, so be warned!
                </div>
                <br>
                <div >
                  <b>
                    
                 Facts & Figures:
                  </b>
                 
                </div>
                <div>
                <table class="table table-bordered">
                  <thead class="bg-info">
                    <tr>
                    <th>Since</th>
                    <th>Year 2000</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Course days</td>
                      <td>± 340 days annually</td>
                    </tr>
                    <tr>
                      <td>Delegates trained</td>
                      <td>Over 2200</td>
                    </tr>
                  </tbody>
                </table>
                </div>
               <div class="text-center">
                <img src="{{asset('assets/img/fact.png')}}" alt="" style="width: 100%">
              </div>
            </div>
          </article>


        </div>
      </aside>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>


@endsection