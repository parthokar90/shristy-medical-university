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
            <h1>Appointment Save</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Appointment Save</li>
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
                <h3 class="card-title">Appointment Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('appointment.update',$appointment->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Patient Name: </label>
                        {{$appointment->patient->name}}
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Mobile: </label>
                          {{$appointment->patient->mobile}}
                        </div>
                      </div>
  
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Consultant: </label>
                          {{$appointment->consultant->name}}
                        </div>
                      </div>
                                                                                        
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Service: </label>
                          {{$appointment->service->name}}
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      
                      <div class="col-sm-4">
                          <label>Status</label>
                          <div class="form-group clearfix">
                              
                             <select name="status" class="form-control" id="">
                               <option value="1" {{$appointment->status==1?'selected':''}} >Not Date Confirm</option>
                               <option value="2"  {{$appointment->status==2?'selected':''}}>Confirm not Visited</option>
                               <option value="3"  {{$appointment->status==3?'selected':''}}>Visited</option>
                             </select>
                              
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
