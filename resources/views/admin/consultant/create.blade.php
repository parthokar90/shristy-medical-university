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
            <h1>Consultant Save</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Consultant Create</li>
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
                <h3 class="card-title">Consultant Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('consultant.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Course Name">
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Consultant Image</label>
                        <div class="custom-file">                            
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                      </div>
                      </div>
                    </div>                                   
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Consultant Degree</label>
                        <textarea class="textarea form-control" name="doctorTitle" rows="3" placeholder="Enter Course Details"></textarea>
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Profile</label>
                        <textarea class="textarea form-control" name="profile" rows="3" placeholder="Enter profile"></textarea>
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                        <label>Piority</label>
                        <input name="piority" type="text" id="piority" class="form-control" placeholder="Enter Piority">
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                        <label>Status</label>
                        <div class="form-group clearfix">                            
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" checked value="1" id="radioSuccess1">
                              <label for="radioSuccess1"> Active
                              </label>
                            </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" value="0" id="radioSuccess2">
                              <label for="radioSuccess2">
                                  Inactive
                              </label>
                            </div>                            
                          </div>
                    </div>                   
                  </div>
                  <div class="d-flex justify-content-center mt-4">
                    <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
                    <a class="btn btn-info ml-2" href="{{route('consultant.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
