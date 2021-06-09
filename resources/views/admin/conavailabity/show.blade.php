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
            <h1>Consultant View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Consultant Save</li>
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
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Name: </label>
                      {{$consultant->name}}
                    </div>
                  </div>
                  
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Consultant Image</label>
                      <div class="custom-file">   
                        @if(file_exists('backend/consultant/'.$consultant->image))
                      <img src="{{asset('backend/consultant/'.$consultant->image)}}" alt="" style="height: 100px;width:100px;">                        
                        @endif
                        </div>
                    </div>
                    </div>
                  </div>                                   
                <div class="row">
                  <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Consultant Degree: </label>
                      {!! $consultant->doctorTitle !!}
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-sm-12">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Profile: </label>
                    {!! $consultant->profile !!}
                  </div>
                </div>
               
              </div>
                <div class="row">
                  <div class="col-sm-4">
                      <label>Piority: </label>
            {{$consultant->piority}}
                  </div> 
                </div>
              <div class="row">
                <div class="col-sm-4">
                    <label>Status: </label>
                          {{$consultant->status==1?"Active":"Inactive"}}
                </div> 
              
              </div>
              <div class="d-flex justify-content-center mt-4">
                <div class="col-sm-4">
                <a class="btn btn-info ml-2" href="{{route('consultant.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
