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
               <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5" style="margin-top: 17px;">
                 <h3 class="mb-2">
                     <span>
                     Consultant: {{$consultant->name}}</span>
                     <span style="float: right">Service: {{$services->name}}
                    </span>
                    </h3>
                    <form action="{{route('finishAppointment')}}" class="appointment-form ftco-animate" method="post">
                        <input type="hidden" name="id" value="{{$appointment->id}}">
                        {{csrf_field()}}
                  <div class="text-center">
                       @foreach($availableDate as $value) 
                    <div class="form-check form-check-inline" style="margin-top: 20px">
                        <input class="form-check-input" type="radio" name="date" id="{{$value->id}}" value="{{$value->date}}">
                        <label class="form-check-label" for="{{$value->id}}">{{$value->date}}  Start time : {{$value->startTime}} - End Time:{{$value->endTime}} </label>
                    </div>
                      @endforeach
                    </div>
                    <div style="text-align: center;margin-bottom:20px">
                        <input type="submit" value="Booking" name="save" class="btn btn-info py-3 px-4"  >
                      </div>
                 </form>
                 
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   
@endsection
