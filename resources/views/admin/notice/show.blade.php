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
            <h1>Notice Save</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Notice Save</li>
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
                <h3 class="card-title">Notice Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Title: </label>
                        {{$notice->title}}
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Notice Image</label>
                        <div class="custom-file">
                            <img src="{{asset('backend/notice/'.$notice->image)}}" alt="" class="img-fluid">
                          </div>
                      </div>
                      </div>
                    </div>
                  
                 
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Detail: </label>
                     {!! $notice->details !!}
                      </div>
                    </div>
                   
                  </div>                        

                  <div class="row">

                    <div class="col-sm-4">
                      <label>Piority: </label>
                      {{$notice->piority}}
                  </div> 
                  <div class="col-sm-4">
                      <label>In Title Display: </label>
                      {{$notice->inTitle==1?"Yes":"No"}}
                  </div> 
                  <div class="col-sm-4">
                      <label>In Home Display: </label>
                      {{$notice->inHome==1?"Yes":"No"}}
                  </div> 

                    <div class="col-sm-4">
                        <label>Status: </label>
                        {{$notice->status==1?"Active":"Inactive"}}
                    </div> 
                  
                  </div>
                  <div class="d-flex justify-content-center mt-4">
                    <div class="col-sm-4">
                    <a class="btn btn-info ml-2" href="{{route('notice.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
