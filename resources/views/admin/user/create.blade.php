@extends('admin.layouts.master')

@section('content')
 <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
          @include('includes.messages')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Student Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Create Student Information</li>
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
                <h3 class="card-title">Student Information</h3>
              </div>
              <div class="card-body">
      
              <form method="POST" action="{{route('user.store')}}">
                  @csrf
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="firstName">Full Name</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Full Name" autocomplete="off" value="{{old('firstName')}}">
                  </div>
                </div>

               <div class="col-md-12">
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

        
               <div class="col-md-12">
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



               <div class="col-md-12">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" autocomplete="off" value="{{old('phone')}}">
                  </div>
                </div>

               <div class="col-md-12">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" value="{{old('email')}}">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="gender">Gender</label>
                  <select id="gender" class="form-control" name="gender">
                    <option value="1" @if (old('gender') == "1") {{ 'selected' }} @endif>Male</option>
                    <option value="2" @if (old('gender') == "2") {{ 'selected' }} @endif>Female</option>
                  </select>
                  </div>
                </div>

                <div class="col-md-12">
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

                 <div class="d-flex justify-content-center mt-4">
                    <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
                    <a class="btn btn-info ml-2" href="{{route('user.index')}}"><i class="fas fa-step-backward"></i> Back</a>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
