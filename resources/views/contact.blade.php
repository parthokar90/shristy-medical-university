@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Contact</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>            
           <li class="active">Contact</li>
         </ol>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">
         <!-- start title -->
         <div class="mu-title">
           <h2>Get in Touch</h2>
           <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
         </div>
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">           
           <div class="row">
             <div class="col-md-6">
               <div class="mu-contact-left">
                 <form class="contactform">                  
                   <p class="comment-form-author">
                     <label for="author">Name <span class="required">*</span></label>
                     <input type="text" required="required" size="30" value="" name="author">
                   </p>
                   <p class="comment-form-email">
                     <label for="email">Email <span class="required">*</span></label>
                     <input type="email" required="required" aria-required="true" value="" name="email">
                   </p>
                   <p class="comment-form-url">
                     <label for="subject">Subject</label>
                     <input type="text" name="subject">  
                   </p>
                   <p class="comment-form-comment">
                     <label for="comment">Message</label>
                     <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                   </p>                
                   <p class="form-submit">
                     <input type="submit" value="Send" class="btn btn-primary btn-block" name="submit">
                   </p>        
                 </form>
               </div>
             </div>
             <div class="col-md-6">
               <div class="mu-contact-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.995488680092!2d90.36773811550779!3d23.74754028459075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf7c683b65f7%3A0x5bd9523d739850c8!2sShristy%20Institute%20for%20Health%20Sciences%20and%20Technology%20Ltd.!5e0!3m2!1sen!2sbd!4v1580799536557!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 20px">
           <div class="col-md-6">  
           <b> Office Location & Address:</b> 
           <br>
            Shristy Institute for Health Sciences & Technology Ltd.<br>
            Green Rowshanara Tower, Level-9, <br>
            55 Satmasjid Road, Dhanmondi, Dhaka – 1209<br>
            Bangladesh<br>

            <b>Web:</b> www.shristyultrasound.com <br>

            ☎   +8801552441121, +8801711563737 <br>
            <b>Whatsapp:</b> +8801711563737
          </div>
          <div class="col-md-6">

           <span ><b> E-mails: </b></span> <br><br>
         <b>1.  For general information: </b><br>
           info@shristyultrasound.com <br><br>

           <b>2.  Md. Shahidul Islam Biplob, Manager admin</b> <br>
           admin@shristyultrasound.com<br> <br>
           
           <b>3.  Dr. Mohammad Akhter Hossain, CEO & Program director</b> <br>
           
        
            drakhter@shristyultrasound.com<br><br>



            <b>4. Sifat Sagufta Hossain, Director, admission</b> <br>
            sifat@shristyultrasound.com <br><br>



            <b>5. Rifat Hossain, Director</b> <br>
            rifat@shristyultrasound.com <br>  <br>


            <b>6.  Mahfuza Khanam, Managing Director</b> <br>
            mahfuza@shristyultrasound.com  <br>  <br>



          <b> Course Coordinators:</b><br>
           Dr.drakhter@shristyultrasound.com<br>
           Dr. Tansena: drtansena@shristyultrasound.com<br>

           <b>Visit our office: </b> all week days except Tuesday (Friday we are open).<br>

           <b> Office Hours: </b> <br>  
           All week days: 10.00am-06.00pm (Except Tuesday)<br>
           Friday: Open, 9.00am to 6.00pm <br>

           <b>Closed:</b> Tuesday & govt designated holidays.<br>


         </div>
       </div>
     </div>
     <!-- end contact content -->
   </div>
 </div>
</div>
</div>
</section>
<!-- End contact  -->
@endsection