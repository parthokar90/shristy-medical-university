@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Faculty Profile</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>            
           <li class="active">Faculty Profile</li>
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
            <div class="col-md-12" style="background: #C00000;color:white">
              <div class="col-md-9">
                {!! $faculty->profileTitle !!}
              </div>
              <div class="col-md-3">
                <img src="{{asset('assets/img/faculty/'.$faculty->profile_pic)}}" alt="" style="height:200px;width: 100%">
              </div>
            </div>
            <div class="col-md-12">
              {!! $faculty->profile !!}
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