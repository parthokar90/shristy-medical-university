@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Notice</h2>
            <ol class="breadcrumb">
            <li><a href="{{route('index')}}">Home</a></li>            
             <li > <a href="{{route('notices')}}">Notices</a></li>
             <li class="active">Notice</li>
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
                 @if(isset($notice))
                 <div class="mu-course-container mu-blog-single">
                   <div class="row">
                     <div class="col-md-12">
                       <article class="mu-blog-single-item">
                         <figure class="mu-blog-single-img">
                           
                          <img alt="img" src="{{asset('backend/notice/'.$notice->image)}}" style="height: 300px;width:100%">
                         
                           <figcaption class="mu-blog-caption">
                           <h3>{{$notice->title}}</h3>
                           </figcaption>                      
                         </figure>
                         <div class="mu-blog-meta">
                           
                           {{$notice->created_at}}
                         </div>
                         <div class="mu-blog-description">
                         {!! $notice->details !!}  
                         </div>
                       </article>
                     </div>                                   
                   </div>
                 </div>
                 <!-- end course content container -->
                 <!-- start blog navigation -->
                 <div class="row">
                   <div class="col-md-12">
                     <div class="mu-blog-single-navigation">
                      @if($previous!=null)
                       <a class="mu-blog-prev" href="{{route('notice',$previous)}}"><span class="fa fa-angle-left"></span>Prev</a>
                       @endif
                       @if($next!=null)
                       <a class="mu-blog-next" href="{{route('notice',$next)}}">Next<span class="fa fa-angle-right"></span></a>
                       @endif
                     </div>
                   </div>
                 </div>
                 <!-- end blog navigation -->
                 @else
                   <h3 style="width: 100%;text-align:center;"> Don't have any Notice!</h3>
                 @endif
               </div>
                   
                 </aside>
                 <!-- / end sidebar -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
@endsection