@extends('layouts.master')
@section('title',$title)
@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Application</h2>
          <ol class="breadcrumb">
          <li><a href="{{route('index')}}">Home</a></li>            
           <li class="active">Application</li>
         </ol>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact" style="padding-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">
         <!-- start title -->
         <div class="mu-title">
           <h3>Please Application for Admission</h3>
           
         </div>
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">    
                  @include('includes.messages')       
           <div class="row">
             <div class="col-md-12">
               <div class="mu-contact-left">
                <form method="POST" action="{{route('registration')}}">
                  @csrf
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstName">Full Name</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Full Name" autocomplete="off" value="{{old('firstName')}}">
                  </div>
                </div>

        
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="course">Please Select Semester</label>
                    <select class="form-control" id="course" name="semester_id">
                      <option value="">Select Semester</option>
                      @foreach ($semester as $key=> $item)
                        <option value="{{$item->id}}">{{$item->semister_name}}</option>    
                      @endforeach
                    </select>
                  </div>
                </div>


                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="course">Please Select Session</label>
                    <select class="form-control" id="course" name="session_id">
                      <option value="">Select Session</option>
                      @foreach ($session as $key=> $se)
                        <option value="{{$se->id}}">{{$se->name}}</option>    
                      @endforeach
                    </select>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" autocomplete="off" value="{{old('phone')}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" value="{{old('email')}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gender">Gender</label>
                  <select id="gender" class="form-control" name="gender">
                    <option value="1" @if (old('gender') == "1") {{ 'selected' }} @endif>Male</option>
                    <option value="2" @if (old('gender') == "2") {{ 'selected' }} @endif>Female</option>
                  </select>
                  </div>
                </div>
                   <div class="col-md-6">
                  <div class="form-group">
                    <label for="gender">Religion</label>
                  <select id="gender" class="form-control" name="religion">
                    <option value="2" @if (old('religion') == "2") {{ 'selected' }} @endif>Islam</option>
                    <option value="3" @if (old('religion') == "3") {{ 'selected' }} @endif>Hinduism</option>
                    <option value="1" @if (old('religion') == "1") {{ 'selected' }} @endif>Christianity</option>
                    <option value="4" @if (old('religion') == "4") {{ 'selected' }} @endif>Others</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <a href="{{route('admission')}}" class="btn btn-success">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                </form>
               </div>
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