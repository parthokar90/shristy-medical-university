@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Payment</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>            
           <li class="active">Payment</li>
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
              <h3 class="text-center" style="margin-top: 20px;margin-bottom:30px">Choose your method</h3>
             <div class="col-md-3"><a href="#"><img src="{{asset('assets/img/paymentPic/bkash.png')}}" style="height: 150px;width:200px" alt=""></a></div>
              <div class="col-md-3"><a href="#"><img src="{{asset('assets/img/paymentPic/ucash.jpg')}}" style="height: 150px;width:200px" alt=""></a></div>
              <div class="col-md-3"><a href="#"><img src="{{asset('assets/img/paymentPic/nogot.png')}}" style="height: 150px;width:200px" alt=""></a></div>
              <div class="col-md-3"><a href="#"><img src="{{asset('assets/img/paymentPic/other.png')}}" style="height: 150px;width:200px" alt=""></a></div>
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