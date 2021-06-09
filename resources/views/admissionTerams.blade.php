@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Admission Terms and Condition</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>            
           <li class="active">Admission Terms and Condition</li>
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
              <h3 class="text-center" style="margin-top: 20px">Please agree with our Terms and Condition</h3>
              <h2 class="text-center"> <b>Terms</b></h1>

                <p class="text-center">
                  Shristy Institute’s aims to train tertiary level healthcare professionals to become highly skilled and critical ultrasound researchers who embrace the idea of lifelong learning. <br>

                  Our ultrasound scanners scan their patients in a safe and informative way for different purposes.
                  <br>
                  The scans can either have a diagnostic or prognostic function as well as an interventional, rehabilitative or evaluative purpose.

                </p>
                <div >
                  <h1 class="text-center">Condition</h1>
                  <p class="text-center">To inspire and educate the next generation of 
                    healthcare professionals in
                    Ultrasound Imaging 
                  </p>
                </div>

              </div>
            <div class="col-md-12 text-center"><a href="{{route('registration')}}" class="btn btn-default">agree</a></div>
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