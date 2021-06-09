@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Appointment</h2>
            <ol class="breadcrumb">
             <li><a href="#">Home</a></li>            
             <li class="active">Appointment</li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   </section>
   <!-- End breadcrumb -->
   
   <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb ">
     <div class="container">
       <div class="row d-flex">
   
         <div class="col-md-12 col-lg-12 pl-lg-5 py-md-5 ">
           <div class="py-md-5">
             <div class="row justify-content-start pb-3">
               <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5" style="margin-top: 76px;">

                 <div class="col-md-12" style="border: 10px solid black">
                   <div class="col-md-3">
                    <img src="{{asset('assets/img/appoint.png')}}">
                   </div>
                     <div class="col-md-9" style="font-size: 2.1em;font-weight: bold;color: #002060;padding-top: 10px;">
                        Center for <br/>
                        Advanced Fetal-Maternal & <br/>
                        Vascular Sonography/General Ultrasound
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   
   <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
     <div class="container">
       <div class="row d-flex">
         <div class="col-md-12 py-5">
           <div class="py-lg-5">
             <div class="row justify-content-center pb-5">
               <div class="col-md-12 heading-section ftco-animate">
                 <h2 class="mb-3 text-danger" style="margin-top: 76px;">Our Services</h2>
               </div>
             </div>
             <div class="row">
               <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                 <div class="media block-6 services d-flex">
                   <div class="media-body pl-md-4">
                     
                     <div class="h3 font-weight-bold mb-3"> We are doing high quality ultrasound examination and reporting by highly qualified and experienced sonologists for-</div>

                     <div class="text-danger " style="font-size: 1.3em;margin-top: 20px;font-weight: bold"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> High-risk pregnancies including </div>
                     <div class="text-danger " style="font-size: 1.3em;font-weight: bold" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> 3D/4D pregnancy ultrasound  </div>
                     <div class="text-danger " style="font-size: 1.3em;font-weight: bold"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Fetal anomaly & genetic screening </div>
                     <div class="text-danger " style="font-size: 1.3em;font-weight: bold"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Fetal Doppler surveillance for preeclampsia, fetal growth restriction </div>
                   </div>
                 </div>      
               </div>
             </div> 

             <div class="row">
               <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                 <div class="media block-6 services d-flex">
                   <div class="media-body pl-md-4">
                    
                     <div class="h3 font-weight-bold mb-3"> We also do- </div>
                     <div class=" " style="font-size: 1.3em;margin-top: 20px;font-weight: bold;color:#7030A0"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Vascular Doppler sonography- carotid, extremities, renal artery </div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Breast ultrasound </div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Thyroid, Neck ultrasound </div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Scrotum & other small parts</div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Abdominal and pelvic ultrasound</div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Musculoskeletal ultrasound for all joints, muscles and ligaments</div> 
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Congenital dislocation of hip joints</div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> All general ultrasound </div>
                   </div>
                 </div>      
               </div>
             </div> 


             <div class="row">
               <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                 <div class="media block-6 services d-flex">
                   <div class="media-body pl-md-4">
                    
                     <div class="h3 font-weight-bold mb-3"> We also arrange following tests for confirmation of genetic disorders –  </div>
                     <div class=" " style="font-size: 1.3em;margin-top: 20px;font-weight: bold;color:#7030A0"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Non-Invasive Pregnancy Test – Cell-free DNA </div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Amniotic fluid sampling </div>
                     <div class=" " style="font-size: 1.3em;font-weight: bold;color:#7030A0"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Karyotyping </div>
                   </div>
                 </div>      
               </div>
             </div>


             <div class="row justify-content-center pb-5">
               <div class="col-md-12 heading-section ftco-animate">
                 <h2 class="mb-3 text-danger" style="margin-top: 40px;">OUR CONSULTANT SONOLOGISTS:</h2>
               </div>
             </div>

              <div class="row">
               <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                 <div class="media block-6 services d-flex">
                   <div class="media-body pl-md-4">
                    
                     <div class="h3 font-weight-bold mb-3"> Professor Dr. Nasreen Sultana </div>
                     <div class="h3 font-weight-bold mb-3"> Dr. Tansena Akhter </div>
                     <div class="h3 font-weight-bold mb-3"> Dr. Mohammad Akhter Hossain </div>
                     <div class="h3 font-weight-bold mb-3"> Dr. Juairia Ferdausi </div>
                     <div class="h3 font-weight-bold mb-3"> Dr. Sylvia Parvez </div>
                     <div class="h3 font-weight-bold mb-3"> Dr. Rokshana Akhter </div>
                     <div class="h3 font-weight-bold mb-3"> Dr. Tahrima Hedayet  </div>
                     <div class="h3 font-weight-bold mb-3"> For your examination need and appointment contact with our office</div>
                    
                   </div>
                 </div>      
               </div>
             </div>

           </div>
         </div>
        <!--  <div class="col-md-12 d-flex" style="margin-top: 20px;">
          @include('includes.messages')
           <div class="appointment-wrap bg-white p-5 d-flex align-items-center">
             <form action="{{route('saveAppointment')}}" class="appointment-form ftco-animate" method="post">
              {{csrf_field()}}
              <h3>Consultation</h3>
               
                   <div class="">
                     <div class="form-group">
                       <div class="form-field">
                         <div class="select-wrap">
                           <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                           <select name="service" required id="services" class="form-control">
                            <option selected >Please Select Service</option>
                             @foreach($services as $value)
                             <option value="{{$value->id}}">{{$value->name}}</option>
                             @endforeach
                           </select>
                         </div>
                       </div>
                     </div>
                     <div class="">
                      <div class="form-group">
                       <select required name="consultant" class="form-control" id="consultant">
                        <option  >Please Select Service </option>
                       </select>
                      </div>
                        </div>
                     <div class="form-group">
                       <input type="text" class="form-control" placeholder="Mobile" name="mobile" required>
                     </div>
                     <div class="form-group">
                       <input type="text" class="form-control" placeholder="Email" name="email">
                     </div>
                   </div>
                   
                     <div class="form-group">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="1">
                        <label class="form-check-label" for="male">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="2">
                        <label class="form-check-label" for="female">Female</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="3">
                        <label class="form-check-label" for="other">Other</label>
                      </div>
                     </div>                                       
                
                   <div class="">
                     <div class="form-group">
                       <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                     </div>
                     <div class="form-group">
                       <input type="submit" value="submit" name="save" class="btn btn-secondary py-3 px-4" onclick="Appointment();"  style="background: #613567;color: #FAF8FA;">
                     </div>
                   </div>
                 </form>
               </div>
             </div> -->
           </div>
         </div>
       </section>
@endsection
@section('js')
<script>
  $('#services').on('change',function(){
    
    var value=$(this).val();
    if(value==0){
      alert("Please select Service");
    }
    else{
      $('#consultant').empty();
      $.get("{{url('getConsultant')}}"+'/' + value, function (data) {
        var info='';
        
        if(data.length > 0){
        for (index = 0; index < data.length; ++index) {
        var consultant=data[index].consultant_id;
        var name=data[index].name;
        info +='<option value="'+consultant+'">'+name+'</option>';
      }
      }
        else{          
          info +='<option value="'+0+'">No consultant availabile </option>';
        }        
      $('#consultant').append(info);
      });
      
    }
  });
</script>    
@endsection