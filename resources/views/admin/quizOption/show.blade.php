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
            <h1>Quiz Option View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Quiz View</li>
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
                <h3 class="card-title">Quiz option Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Serial No.: </label>
                    {{$quiz_option->serial}}
                    </div>
                  </div>                                
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Question: </label>
                      {{$quiz_option->question}}
                    </div>
                  </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label> Image</label>
                    <div class="custom-file">
                      <img src="{{asset('backend/quiz/'.$quiz_option->image)}}" alt="" style="height:100px;width:100px">
                        
                      </div>
                  </div>
                  </div>      
                </div>                
                  <div class="row">      
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Option 1: </label>
                        {{$quiz_option->option1}}
                      </div>
                    </div>                                                                 
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Option 2: </label>
                      {{$quiz_option->option2}}
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Option 3: </label>
                    {{$quiz_option->option3}}
                </div>                    
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Option 4: </label>
                    {{$quiz_option->option4}}
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <label>Correct Ans: </label>
                      {{$quiz_option->correct_ans}}
                  </div>
                  </div>
                  
                  <div class="row">                                                                       
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Description: </label>
                      {{$quiz_option->details}}
                      </div>
                    </div>                       
                  </div>
                  <div class="col-sm-6">
                      <label>Status: </label>
                      {{$quiz_option->status==1?'Active':'Inactive'}}
                  </div>                     
                </div>

                <div class="row">
                <div class="d-flex justify-content-center mt-4">
                  <div class="">
                      
                  <a class="btn btn-info ml-2" href="{{route('questionList',$quiz_option->quiz_id)}}"><i class="fas fa-step-backward"></i> Back</a>
                  </div>
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
