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
            <h1>Consultant Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Consultant Edit</li>
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
              <form role="form" method="POST" action="{{route('consultantavailabitiy.update',$conavailabity->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="consultant_id">Consultant</label>
                          <select name="consultant_id" id="consultant_id" class="form-control">
                            @foreach ($consultants as $item)                              
                          <option {{$conavailabity->consultant_id==$item->id?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="service_id">Service</label>
                          <select name="service_id" id="service_id" class="form-control">
                            @foreach ($services as $item)                              
                            <option {{$conavailabity->service_id==$item->id?'selected':''}}  value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                          <label for="perPatientTime">Per Patient Time</label>
                      <input name="perPatientTime" value="{{$conavailabity->perPatientTime}}" type="text" id="perPatientTime" class="form-control" placeholder="Enter per Patient Time">
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
                      <a class="btn btn-info ml-2" href="{{route('consultantavailabitiy.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
