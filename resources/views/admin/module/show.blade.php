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
            <h1>Module Save</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Module Save</li>
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
                <h3 class="card-title">Module Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form >
                    
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Module Name: </label>
                        {{$module->module_name}}
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Module Code: </label>
                          {{$module->module_code}}
                        </div>
                      </div>  

                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Group Name: </label>
                          {{$module->group->group_title}}
                        </div>
                      </div>
  
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Course: </label>
                          {{$module->course->course_name}}
                        </div>
                      </div>
                    </div>
                    
                      <div class="row">                                                                       
                      <div class="col-sm-12">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Module Detail: </label>
                       {!! $module->details !!}
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                          <label>Piority: </label>
                          {{$module->piority}}
                      </div> 
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Module Image: </label>
                          <div class="custom-file">
                            @if($module->image!=null)
                            <img src="{{asset('backend/module/'.$module->image)}}" alt="" style="height:100px;width:100px">
                            @endif
                            </div>
                        </div>
                        </div>
                      <div class="col-sm-4">
                          <label>Status</label>
                          {{$module->status==1?'Active':'Inactive'}} 
                      </div> 
                    
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                      <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">                         
                      <a class="btn btn-info ml-2" href="{{route('module.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
