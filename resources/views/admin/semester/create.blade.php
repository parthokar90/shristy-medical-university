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
            <h1>Create Semester Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Create Semester Information</li>
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
                <h3 class="card-title">Semester Information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('semesters.store')}}">
                    {{csrf_field()}}
                  <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Semester Name</label>
                            <input type="text" name="semister_name" id="semister_name" class="form-control" placeholder="Enter Semester Name" value="{{old('semister_name')}}" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Select Course</label>
                                <select class="form-control" name="course_id[]" multiple>
                                  @foreach($course as $courses)
                                   <option value="{{$courses->id}}">{{$courses->course_name}}</option>
                                  @endforeach  
                                </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Status</label>
                                <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                                </select>
                        </div>
                    </div>

                    </div>
                  <div class="d-flex justify-content-center mt-4">
                    <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
                    <a class="btn btn-info ml-2" href="{{route('semesters.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
