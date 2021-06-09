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
              <form role="form" method="POST" action="{{route('quizoption.update',$quiz_option->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    {{-- <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Serial No.</label>
                        <input type="text" name="serial" value="{{$quiz_option->serial}}" id="serial" class="form-control" placeholder="Enter Quiz serial">
                        </div>
                      </div>                                
                    <input type="hidden" name="quiz_id" value="{{$quiz_option->quiz_id}}" id="quiz_id"> 
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Question </label>
                          <input type="text" name="question" value="{{$quiz_option->question}}" id="question" class="form-control" placeholder="Enter Quiz">
                        </div>
                      </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label> Image</label>
                        <div class="custom-file">
                          <img src="{{asset('backend/quiz/'.$quiz_option->image)}}" alt="" style="height:100px;width:100px">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                      </div>
                      </div>      
                    </div>                
                      <div class="row">      
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Option 1</label>
                            <input name="option1" type="text" value="{{$quiz_option->option1}}" id="option1" class="form-control" placeholder="Enter Option1">
                          </div>
                        </div>                                                                 
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Option 2</label>
                          <input name="option2" type="text" value="{{$quiz_option->option2}}" id="option2" class="form-control" placeholder="Enter Option 2">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <label>Option 3</label>
                        <input name="option3" type="text" id="option3" value="{{$quiz_option->option3}}" class="form-control" placeholder="Enter Option 3">
                    </div>                    
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Option 4</label>
                        <input name="option4" type="text" id="option4" value="{{$quiz_option->option4}}" class="form-control" placeholder="Enter Option 4">
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <label>Correct Ans</label>
                          <div class="form-group clearfix">                              
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans" {{$quiz_option->correct_ans=='option1'?'checked':''}} value="option1" id="option1Answer">
                                <label for="option1Answer"> Option 1
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans" {{$quiz_option->correct_ans=='option2'?'checked':''}} value="option2" id="option2Answer">
                                <label for="option2Answer">
                                    Option 2
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans" {{$quiz_option->correct_ans=='option3'?'checked':''}} value="option3" id="option3Answer">
                                <label for="option3Answer"> Option 3
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" {{$quiz_option->correct_ans=='option4'?'checked':''}} name="correct_ans" value="option4" id="option4Answer">
                                <label for="option4Answer">
                                    Option 4
                                </label>
                              </div>                              
                            </div>
                      </div>
                      
                      <div class="row">                                                                       
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Description</label>
                          <textarea class="textarea form-control" name="details" rows="3" placeholder="Enter Answer Decscription">{{$quiz_option->details}}</textarea>
                          </div>
                        </div>                       
                      </div>
                      <div class="col-sm-6">
                          <label>Status</label>
                          <div class="form-group clearfix">                              
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$quiz_option->status==1?'checked':''}} value="1" id="radioSuccess1">
                                <label for="radioSuccess1"> Active
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$quiz_option->status==0?'checked':''}} value="0" id="radioSuccess2">
                                <label for="radioSuccess2">
                                    Inactive
                                </label>
                              </div>                              
                            </div>
                      </div>                     
                    </div> --}}
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Serial No.</label>
                          <b> {{$quiz_option->serial}}</b>
                          <input type="hidden" name="serial" value="{{$quiz_option->serial}}" id="serial" class="form-control" placeholder="serial">
                        </div>
                      </div>                                
                    <input type="hidden" name="quiz_id" value="{{$quiz_option->quiz_id}}" id="quiz_id"> 
                    </div>      
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            <label>Question </label>
                            
                            <textarea name="question" class="form-control" id="question" cols="30" rows="10">{{$quiz_option->question}}</textarea>
                          </div>
                        </div>
                    </div>  
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label> Image</label>
                          <div class="custom-file">                              
                              <input type="file" class="custom-file-input" id="customFile" name="image">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <img src="{{asset('backend/quiz/'.$quiz_option->image)}}" alt="" style="height:100px;width:100px">
                        </div>
                        </div> 
                      </div>        
                      <div class="row">      
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Option 1</label>
                            <input name="option1" type="text" id="option1" value="{{$quiz_option->option1}}" class="form-control" placeholder="Enter Option1">
                          </div>
                        </div>                                                                 
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Option 2</label>
                          <input name="option2" type="text" id="option2" value="{{$quiz_option->option2}}"  class="form-control" placeholder="Enter Option 2">
                        </div>
                      </div>
                    </div>                
                    <div class="row">    
                      <div class="col-sm-6">
                        <label>Option 3</label>
                        <input name="option3" type="text" id="option3" value="{{$quiz_option->option3}}"  class="form-control" placeholder="Enter Option 3">
                    </div>                    
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Option 4</label>
                          <input name="option4" type="text" id="option4" value="{{$quiz_option->option4}}"  class="form-control" placeholder="Enter Option 4">
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                        <div class="form-group">
                          <label>Option 5</label>
                          <input name="option5" type="text" id="option5" value="{{$quiz_option->option5}}"  class="form-control" placeholder="Enter Option 5">
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Correct Ans</label>
                          <div class="form-group clearfix">                              
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans"  {{$quiz_option->correct_ans=='option1'?'checked':''}} value="option1" id="option1Answer">
                                <label for="option1Answer"> Option 1
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans" {{$quiz_option->correct_ans=='option2'?'checked':''}} value="option2" id="option2Answer">
                                <label for="option2Answer">
                                    Option 2
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans" {{$quiz_option->correct_ans=='option3'?'checked':''}} value="option3" id="option3Answer">
                                <label for="option3Answer"> Option 3
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans" {{$quiz_option->correct_ans=='option4'?'checked':''}} value="option4" id="option4Answer">
                                <label for="option4Answer">
                                    Option 4
                                </label>
                              </div>  
                              <div class="icheck-success d-inline">
                                <input type="radio" name="correct_ans" {{$quiz_option->correct_ans=='option5'?'checked':''}} value="option5" id="option5Answer">
                                <label for="option5Answer">
                                    Option 5
                                </label>
                              </div>                              
                            </div>
                      </div>
                      </div>
                      
                      <div class="row">                                                                       
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Description</label>
                          <textarea class="form-control" name="discription" rows="10" cols="10" placeholder="Enter Course Details">{{$quiz_option->discription}}</textarea>
                          </div>
                        </div>                       
                      </div>

                      <div class="row"> 
                      <div class="col-sm-12">
                          <label>Status</label>
                          <div class="form-group clearfix">                              
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$quiz_option->status=='1'?'checked':''}} value="1" id="radioSuccess1">
                                <label for="radioSuccess1"> Active
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$quiz_option->status=='0'?'checked':''}} value="0" id="radioSuccess2">
                                <label for="radioSuccess2">
                                    Inactive
                                </label>
                              </div>                              
                            </div>
                      </div>   
                      </div>   


                    <div class="row">
                    <div class="d-flex justify-content-center mt-4">
                      <div class="">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                          <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
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
