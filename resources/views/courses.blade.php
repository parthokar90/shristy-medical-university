@extends('layouts.master')
@section('title',$title)
@section('content')
<style>
  .group_heading{
    font-size: 2.2em;
    color:#C00000;
  }
  .course_box{
    margin-top:10px;
    width:32.5%;
    margin-right:.5%;
    height:350px;
    color:white;
    box-shadow: 1px 1px 3px black;
    border-radius: 5px;
  }
  .course_icon{
    margin: 35px 0 10px;
    font-size: 30px;
  }
  .course_name{
    font-size: 20px;
    font-family: "Montserrat", sans-serif;
  }
  .short_details{
    font-weight: lighter;
    font-size: 16px;
  }
  .short_desc{
    font-size: 18px;
  }
  .bg-1{
    background-color: #2ecc71;
  }
  .bg-2,.bg-13{
    background-color:dimgray 
  }
.bg-3,.bg-12{
  background-color: #45a0de;
}     
.bg-4,.bg-10{
  background-color: lightseagreen
}
.bg-5,.bg-11{
  background-color: #002060;
}
.bg-6{
  background-color: #C00000;
}
.bg-7{
  background-color: sienna;
}
.bg-8{
  background-color: lightcoral;
}
.bg-9{
  background-color: #DB7093;
}
</style>
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2> Our Course</h2>
            <ol class="breadcrumb">
             <li><a href="#">Home</a></li>            
             <li class="active">Course</li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   </section>
   <!-- End breadcrumb -->
   <section id="" style="margin-bottom:30px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <div class="row">
             <div class="col-md-12 text-center">
                 <div class="row">               
                  <div class="col-md-12">
                 
                   <div class="col-md-12 h3 group_heading">Diploma Courses in Ultrasonography</div>  
                   @php 
                   $i=1;
                   @endphp
                   @foreach ($courses as $item)
                   <a href="{{route('courseDetails',$item->id)}}">
                   <div class="course_box col-md-4 bg-<?php echo $i?>" style="">
                    <div class="course_icon">
                      <span class="fa fa-book"></span>
                    </div>
                  
                    
                   <div class="course_name">  {{$item->course_name}}</div>
                    <div class="short_desc"> 
                      @if($item->short_desc!='')
                  
                   <span class=""> ({{$item->short_desc}})</span>
                   @endif
                  </div>
                  <div class="short_details">
                   @if($item->short_details!='')
                  
                  <span class=""> {{$item->short_details}}</span>
                  @endif
                </div>
                  </div> 
                  @php 
                  $i++;
                  @endphp
                   </a>
                   @endforeach
                 
                  
                  </div>
                 </div>
   
                 <div class="row">               
                  <div class="col-md-12">
                 
                   <div class="col-md-12 group_heading h3 ">Certificate programs</div>  
                   @php 
                   $i=1;
                   @endphp
                   @foreach ($courses2 as $item)
                   <a href="{{route('courseDetails',$item->id)}}">
                   <div class="course_box col-md-4 bg-<?php echo $i?>" style="">
                    <div class="course_icon">
                      <span class="fa fa-book"></span>
                    </div>
                  
                    
                   <div class="course_name">  {{$item->course_name}}</div>
                    <div class="short_desc"> 
                      @if($item->short_desc!='')
                  
                   <span class=""> ({{$item->short_desc}})</span>
                   @endif
                  </div>
                  <div class="short_details">
                   @if($item->short_details!='')
                  
                  <span class=""> {{$item->short_details}}</span>
                  @endif
                </div>
                  </div> 
                  @php 
                  $i++;
                  @endphp
                   </a>
                   @endforeach
                 
                  
                  </div>
                 </div>
   
             </div>
   
           </div>
         </div>
     </div>
   </div>
   </section>
@endsection