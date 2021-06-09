@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>{{$course->course_name}}</h2>
          <div class="breadcrumb" style="color:white">
           {{$course->short_desc}}
         </div>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- End breadcrumb -->
<section id="">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          @if($course->details !=null)
            {!! $course->details !!}  
          @else
          <div class="text-center">
            <img src="{{asset('assets/img/uc.png')}}" alt="">
          </div>
          @endif                             
      </div>
      <div class="col-md-12">
       <div class=" h2">
         For any further info/assistance please Contact or email:
       </div>
       <div class="">

        ☎:                +8801552441121 
        +8801711563737
      </div>
      <div class="">
        <div class="">Whatsapp:  +8801711563737</div>
        <div class="">E-mails: drmahossain58@gmail.com, drakhter58@yahoo.com </div>
        <div class="">Visit our office: all week days except Tuesday (Friday we are open).</div>
        <div class="">Office Hours:     10.00am-06.00pm </div>

        <div class=" h2">Our mailing address :</div>
        <div class="">
          Shristy Institute for Health Sciences & Technology Ltd. <br>
          Green Rowshanara Tower, Level-9, <br>
          55 Satmasjid Road, Dhanmondi, Dhaka – 1209, Bangladesh<br>

          <span class="font-weight-bold">www.shristyultrasound.com </span>

        </div>
      </div>
    </div>
</div>
</section>
@endsection