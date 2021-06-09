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
            <h1>Patient Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Patient Edit</li>
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
                <h3 class="card-title">Patient Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('patient.update',$patient->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{$patient->name}}" placeholder="Enter Name">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Mobile</label>
                          <input name="mobile" type="text" id="mobile" class="form-control" value="{{$patient->mobile}}" placeholder="Enter Mobile No">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <label>Email</label>
                        <input name="email" type="email" id="email" class="form-control" value="{{$patient->email}}" placeholder="Enter Email">
                    </div> 
                      </div>
                    <div class="row">
                      
                      <div class="col-sm-4">
                          <label>Status</label>
                          <div class="form-group clearfix">
                              
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$patient->status==1?'checked':''}} value="1" id="active">
                                <label for="active"> Active
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$patient->status==0?'checked':''}}  value="0" id="inactive">
                                <label for="inactive">
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
                      <a class="btn btn-info ml-2" href="{{route('patient.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
