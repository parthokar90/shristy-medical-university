@extends('admin.layouts.master')

@section('content')

<style>
li{
  list-style:none;
}
</style>
 <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
          @include('includes.messages')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student Elements</h3>
              </div>
              <div class="card-body">
              <form role="form" method="POST" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" id="name" class="form-control" placeholder="Enter user Name">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="{{ $user->email }}" type="text" id="email" class="form-control" placeholder="Enter Email" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Password</label>
                        <input name="password" value="" type="password" id="password" class="form-control" placeholder="Enter Password">
                      </div>
                      </div>

                        <div class="col-sm-3">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          @if($user->status==1)
                          <option value="1" selected>Active</option>
                          <option value="0">InActive</option>
                          @else 
                          <option value="1">Active</option>
                          <option value="0" selected>InActive</option>
                          @endif 
                        </select>
                      </div>
                      </div>
                    </div>                          
                  <div class="d-flex justify-content-center mt-4">
                    <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                    <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
                    <a class="btn btn-info ml-2" href="{{route('user.index')}}"><i class="fas fa-step-backward"></i> Back</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



      <div class="card">
        <div class="row">
      
              <div class="col-md-4">
                <h4 class="py-4">Student Info</h4>
                <hr>
                 <ul>
                   <li><b>Name:</b> {{$user->name}}</li>
                   <li><b>Email:</b> {{$user->email}}</li>
                   <li><b>Phone:</b> {{$user->phone}}</li>
                   <li><b>Session:</b> @if(isset($current_session)) {{$current_session->session_name}} @else No Session Found @endif</li>
                   <li><b>Semester:</b> @if(isset($current_semester)) {{$current_semester->semister_name}} @else No Semester Found @endif</li>
                   <li><b>Religion:</b> @if($user->religion==1) Christianity @elseif($user->religion==2) Islam @elseif($user->religion==3) Hinduism @else Other  @endif </li>
                   <li><b>Gender: </b> @if($user->gender==1) Male @else Female @endif</li>
                   <li><b>Status:</b> @if($user->status==1) Active @else Inactive @endif</li>
                   <li><b>Result Status:</b> @if($score>=$passed_score) Passed @else Fail @endif</li>
                   <li><b>Payment Status:</b> @if(isset($payment_status)) Paid @else Due @endif</li>
                 </ul>
               </div>

               <div class="col-md-8">
                 <h4 class="py-4">Admission</h4>
                    <hr>
                <form method="post" action="{{route('new_admit',$user->id)}}">
                 @csrf 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="course">Please Select Session</label>
                    <select class="form-control" id="course" name="session_id">
                      <option value="">Select Session</option>
                          @php $cc=''; $select=''; @endphp
                                  @foreach ($session as $key=> $se)
                              
                                   @if(isset($current_session)) 
                                     @php $cc=$current_session->id; @endphp
                                   @endif
                                    <option value="{{$se->id}}" {{ $cc == $se->id ? 'selected="selected"' : '' }}             >
                                      {{$se->name}}
                                    </option>
                          @endforeach 
                    </select>
                  </div>
                </div>

        
               <div class="col-md-12">
                  <div class="form-group">
                    <label for="course">Please Select Semester</label>
                    <select class="form-control" id="course" name="semester_id">
                      <option value="">Select Semester</option>
                               @php $cc=''; $select=''; @endphp
                                  @foreach($semester as $key=> $item)
                              
                                   @if(isset($current_semester)) 
                                     @php $cc=$current_semester->id; @endphp
                                   @endif
                                    <option value="{{$item->id}}" {{ $cc == $item->id ? 'selected="selected"' : '' }}             >
                                       {{$item->semister_name}}
                                    </option>
                                  @endforeach 
                       </select>
                     </div>
                  </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-save"></i> Admit Now</button>
                    <button type="reset" class="btn btn-warning mb-2"><i class="fas fa-undo-alt"></i> Reset</button>
                    <a class="btn btn-info mb-2" href="{{route('user.index')}}"><i class="fas fa-step-backward"></i> Back</a>
                 </form>
               </div>
           </div>
        </div>
      </div>
    </section>
  </div>

@endsection
