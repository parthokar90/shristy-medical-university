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
            <h1>Quiz Save</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Quiz Save</li>
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
                <h3 class="card-title">Quiz Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('quiz.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label>Quiz Title</label>
                          <input type="text" name="quiz_title" id="quiz_title" class="form-control" placeholder="Enter Quiz Title">
                        </div>
                      </div>
                     
  
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Modules </label>
                          <select name="module_id" id="module_id" class="form-control">
                            <option value="">Please Select</option>
                            @foreach ($modules as $item)
                              <option value="{{$item->id}}">{{$item->module_name}}</option>  
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    
                      <div class="row">   

                       <div class="col-sm-3">
                        <div class="form-group">
                          <label>Exam Session </label>
                          <select name="examsess_id" id="examsess_id" class="form-control">
                            <option value="">Please Select</option>
                            @foreach ($exam_sessions as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>  
                            @endforeach
                          </select>
                        </div>
                      </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Total Quiz</label>
                            <input name="total_quiz" type="text" id="total_quiz" class="form-control" placeholder="Enter Total Quiz">
                          </div>
                        </div> 
                         <div class="col-sm-3">
                          <div class="form-group">
                            <label for="need_to_answer">Need To Answer</label>
                            <input name="need_to_answer" type="text" id="need_to_answer" class="form-control" placeholder="Enter no of quiz to play">
                          </div>
                        </div>                                                                 
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Correct Mark</label>
                          <input name="correct_mark" type="text" id="correct_mark" class="form-control" placeholder="Enter Correct mark">
                        </div>
                      </div>
                      </div>
                    <div class="row">

                      <div class="col-sm-3">
                        <label>Wrong Mark</label>
                        <input name="wrong_mark" type="text" id="wrong_mark" class="form-control" placeholder="Enter Wrong mark">
                    </div> 
                    
                     
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Total Time</label>
                          <input name="total_time" type="text" id="total_time" class="form-control" placeholder="Enter Total Time">
                        </div>
                        </div>
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
                      <a class="btn btn-info ml-2" href="{{route('quiz.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
