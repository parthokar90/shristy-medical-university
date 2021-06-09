@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Gallery</h2>
            <ol class="breadcrumb">
             <li><a href="#">Home</a></li>            
             <li class="active">Gallery</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->
  <!-- Start gallery  -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
           <!-- start title -->
           <div class="mu-title">
             <h2>Some Moments</h2>
           <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis doloribus, officia, accusamus illo nam tempore totam alias!</p> -->
           </div>
           <!-- end title -->
           <!-- start gallery content -->
           <div class="mu-gallery-content">
             <!-- Start gallery menu -->
             <div class="mu-gallery-top">              
               <ul>
                 <li class="filter active" data-filter="all">All</li>
                 <li class="filter" data-filter=".lab">Lab</li>
                 <li class="filter" data-filter=".classroom">Class Room</li>
                 <li class="filter" data-filter=".workshop">Workshop</li>
                 <li class="filter" data-filter=".seminars">Seminars</li>
                 <li class="filter" data-filter=".others">Others</li>
               </ul>
             </div>
             <!-- End gallery menu -->
             <div class="mu-gallery-body">
               <ul id="mixit-container" class="row">
                 <!-- start single gallery image -->
                 <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/1.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Web Design</p>
                           <a href="assets/img/gallery/small/1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
 
                 <!-- start single gallery image -->
                     <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/2.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                          
                           <a href="assets/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
                 <!-- start single gallery image -->
                <li class="col-md-3 col-sm-6 col-xs-12 mix workshop">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/3.jpg"></a>
                       </div>
                        <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Animation</p>
                           <a href="assets/img/gallery/big/2.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div> 
                     </div>
                   </div>
                </li>
                 <!-- start single gallery image -->
                 <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/4.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Math</p>
                           <a href="assets/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </li>
                 <!-- start single gallery image -->
                  <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/5.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Web Design</p>
                           <a href="assets/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
 
                 <!-- start single gallery image -->
                     <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/6.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Web Design</p>
                           <a href="assets/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
                 <!-- start single gallery image -->
                <li class="col-md-3 col-sm-6 col-xs-12 mix workshop">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/8.jpg"></a>
                       </div>
                        <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Animation</p>
                           <a href="assets/img/gallery/big/2.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div> 
                     </div>
                   </div>
                </li>
                 <!-- start single gallery image -->
                 <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/9.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Math</p>
                           <a href="assets/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </li>
                  <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/10.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Web Design</p>
                           <a href="assets/img/gallery/big/10.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
 
                 <!-- start single gallery image -->
                     <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/11.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Web Design</p>
                           <a href="assets/img/gallery/big/11.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
                 <!-- start single gallery image -->
                <li class="col-md-3 col-sm-6 col-xs-12 mix workshop">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/12.jpg"></a>
                       </div>
                        <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Animation</p>
                           <a href="assets/img/gallery/big/12.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div> 
                     </div>
                   </div>
                </li>
                 <!-- start single gallery image -->
                 <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/13.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Math</p>
                           <a href="assets/img/gallery/big/13.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </li>
                  <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/14.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Web Design</p>
                           <a href="assets/img/gallery/big/14.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
 
                 <!-- start single gallery image -->
                     <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/15.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Web Design</p>
                           <a href="assets/img/gallery/big/15.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>                  
                     </div>
                   </div>
                 </li>
                 <!-- start single gallery image -->
                <li class="col-md-3 col-sm-6 col-xs-12 mix workshop">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/16.jpg"></a>
                       </div>
                        <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Animation</p>
                           <a href="assets/img/gallery/big/16.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div> 
                     </div>
                   </div>
                </li>
                 <!-- start single gallery image -->
                 <li class="col-md-3 col-sm-6 col-xs-12 mix lab">
                   <div class="mu-single-gallery">                  
                     <div class="mu-single-gallery-item">
                       <div class="mu-single-gallery-img">
                         <a href="#"><img alt="img" src="assets/img/gallery/small/17.jpg"></a>
                       </div>
                       <div class="mu-single-gallery-info">
                         <div class="mu-single-gallery-info-inner">
                           <h4>Image Title</h4>
                           <p>Math</p>
                           <a href="assets/img/gallery/big/17.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                           <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                         </div>
                       </div>
                     </div>
                   </div>
                 </li>
                 
               </ul>            
             </div>
           </div>
           <!-- end gallery content -->
            <!-- <div class="mu-pagination">
                   <nav>
                     <ul class="pagination">
                       <li>
                         <a href="#" aria-label="Previous">
                           <span class="fa fa-angle-left"></span> Prev 
                         </a>
                       </li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li>
                         <a href="#" aria-label="Next">
                          Next <span class="fa fa-angle-right"></span>
                         </a>
                       </li>
                     </ul>
                   </nav>
                 </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End gallery  --> 
@endsection