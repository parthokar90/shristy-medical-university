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
            <h1>Group Create</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Group Create</li>
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
                <h3 class="card-title">Group Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('group.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Group Name</label>
                        <input type="text" name="group_name" id="group_name" class="form-control" placeholder="Enter Group Name">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Group Title</label>
                        <input name="group_title" type="text" id="group_title" class="form-control" placeholder="Enter group title">
                      </div>
                    </div>
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
                    <a class="btn btn-info ml-2" href="{{route('group.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
