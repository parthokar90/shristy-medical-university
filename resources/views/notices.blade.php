@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Notices</h2>
            <ol class="breadcrumb">
            <li><a href="{{route('index')}}">Home</a></li>            
             <li class="active">Notices</li>
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
                       @foreach ($notices as $item)                                                
                     <div class="col-md-6 col-sm-6">
                       <article class="mu-blog-single-item">
                         <figure class="mu-blog-single-img">
                         <a href="{{route('notice',$item->id)}}">
                             <img src="{{asset('backend/notice/'.$item->image)}}" alt="img">
                            </a>
                           <figcaption class="mu-blog-caption">
                           <h3><a href="{{route('notice',1)}}">{{$item->title}}</a></h3>
                           </figcaption>                      
                         </figure>
                         <div class="mu-blog-meta">
                         <a href="{{route('notice',$item->id)}}">{{$item->created_at}}</a>
                         </div>
                         <div class="mu-blog-description">
                           {!! str_limit(strip_tags($item->details), 210) !!}
                           <a class="mu-read-more-btn" href="{{route('notice',$item->id)}}">Read More</a>
                         </div>
                       </article> 
                     </div> 
                     @endforeach
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