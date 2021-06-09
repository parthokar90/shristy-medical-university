@extends('admin.layouts.master')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
          @include('includes.messages')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course Save</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Course Save</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Course Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('course.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Course Name: </label>
                        {{$course->course_name}}
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Course Code: </label>
                        {{$course->course_code}}
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Course Image</label>
                        <div class="custom-file">
                            <img src="{{asset('backend/course/'.$course->image)}}" alt="" class="img-fluid">
                          </div>
                      </div>
                      </div>
                    </div>
                  
                 
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Course Detail: </label>
                     {!! $course->details !!}
                      </div>
                    </div>
                   
                  </div>                        

                  <div class="row">

                    <div class="col-sm-4">
                      <label>Piority: </label>
                      {{$course->piority}}
                  </div> 
                  <div class="col-sm-4">
                      <label>In Menu Display: </label>
                      {{$course->inMenu==1?"Yes":"No"}}
                  </div> 

                    <div class="col-sm-4">
                        <label>Status: </label>
                        {{$course->status==1?"Active":"Inactive"}}
                    </div> 
                  
                  </div>
                  <div class="d-flex justify-content-center mt-4">
                    <div class="col-sm-4">
                    <a class="btn btn-info ml-2" href="{{route('course.index')}}"><i class="fas fa-step-backward"></i> Back</a>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
