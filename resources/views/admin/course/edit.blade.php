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
            <h1>Course Save</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Course Save</li>
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
                <h3 class="card-title">Course Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('course.update',$course->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" value="{{ $course->course_name }}" name="course_name" id="course_name" class="form-control" placeholder="Enter Course Name">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Course Code</label>
                        <input name="course_code" value="{{ $course->course_code }}" type="text" id="course_code" class="form-control" placeholder="Enter Cousrse Code">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Course Image</label>
                        <div class="custom-file">
                            <img src="{{asset('backend/course/'.$course->image)}}" alt="" style="height:100px;width:100px">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                      </div>
                      </div>
                    </div>
                  

                    <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Home Name</label>
                      <input type="text" name="homeName" value="{{ $course->homeName }}" id="homeName" class="form-control" placeholder="Enter Home Name">
                    </div>
                  </div> 

                
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Home Icon</label>
                      <div class="custom-file">
                        <img src="{{asset('backend/course/'.$course->homeIcon)}}" alt="" style="height:100px;width:100px">
                        <input type="file" class="custom-file-input" id="homeIcon" name="homeIcon">
                        <label class="custom-file-label" for="homeIcon">Choose file</label>
                      </div>
                    </div>
                  </div> 
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Credit Hour</label>
                      <input type="text" name="creditHour" value="{{ $course->creditHour }}" id="creditHour" class="form-control" placeholder="Enter Credit Hour">
                    </div>
                  </div>
                </div>

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Course Duration</label>
                          <input type="text" value="{{ $course->courseDuration }}" name="classDuration" id="classDuration" class="form-control" placeholder="Enter Course Duration">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Course Cost</label>
                          <input name="costing" value="{{ $course->costing }}" type="text" id="costing" class="form-control" placeholder="Enter Cousrse Cost">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Latest Order</label>
                          <input name="latestOrder" value="{{ $course->latestOrder }}" type="text" id="latestOrder" class="form-control" placeholder="Enter Latest Cousrse order">
                        </div>
                      </div>
                    </div>

                      <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Home Piority</label>
                      <input type="text" name="homePiority" value="{{ $course->homePiority }}" id="homePiority" class="form-control" placeholder="Enter Home Piority">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>icon</label>
                      <div class="custom-file">
                        <img src="{{asset('backend/course/'.$course->icon)}}" alt="" style="height:100px;width:100px">
                        <input type="file" class="custom-file-input" id="icon" name="icon">
                        <label class="custom-file-label" for="icon">Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label>In Featured Courses</label>
                    <div class="form-group clearfix">

                      <div class="icheck-success d-inline">
                        <input type="checkbox" {{$course->inHome==1?'checked':''}} name="inHome" value="1" id="inHome">
                        <label for="inHome"> Yes
                        </label>
                      </div>                                          
                    </div>
                  </div>

                </div>
                 <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Home Desc</label>
                      <textarea  name="homeDesc" type="text" id="homeDesc" class="form-control" cols="10" rows="10">{{$course->homeDesc}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Short desc</label>
                      <textarea name="short_desc" id="short_desc" class="form-control" cols="10" rows="10">{{$course->short_desc}}</textarea>
                    </div>
                  </div>
                </div>



                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>key Features</label>
                            <textarea name="keyFeatures" class="form-control"  id="keyFeatures" cols="10" rows="10">{{$course->keyFeatures}}</textarea>
                          </div>
                        </div>
                      </div>
                 
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Course Detail</label>
                        <textarea class="textarea form-control" name="details" rows="3" placeholder="Enter ...">{{$course->details}}</textarea>
                      </div>
                    </div>
                   
                  </div>

                  <div class="row">
                  <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Short details</label>
                      <textarea class="textarea form-control" name="short_details" rows="3" placeholder="Enter Course Short details">{{$course->short_details}}</textarea>
                    </div>
                  </div>
                  
                </div>

                  <div class="row">
                    <div class="col-sm-4">
                      <label>Group</label>
                      <select name="group_id" id="group_id" class="form-control">
                        @foreach ($groups as $item)
                      <option {{$item->id==$course->group_id?'selected':''}} value="{{$item->id}}">{{$item->group_name}}</option>
                        @endforeach
                      </select>
                  </div> 

                    <div class="col-sm-4">
                      <label>Piority</label>
                    <input name="piority" type="text" id="piority" value="{{$course->piority}}" class="form-control" placeholder="Enter Piority">
                  </div> 
                 
                  </div>
                  <div class="row">

                    <div class="col-sm-4">
                      <label>In Featured Courses</label>
                      <div class="form-group clearfix">
                          
                          <div class="icheck-success d-inline">
                            <input type="checkbox" {{$course->inHome==1?'checked':''}} name="inHome" value="1" id="inHome">
                            <label for="inHome"> Yes
                            </label>
                          </div>                                          
                        </div>
                  </div>
                    <div class="col-sm-4">
                      <label>In Latest Course</label>
                      <div class="form-group clearfix">
                          
                          <div class="icheck-success d-inline">
                            <input type="checkbox" {{$course->latestCourseStatus==1?'checked':''}} name="latestCourseStatus" value="1" id="latestCourseStatus">
                            <label for="latestCourseStatus"> Yes
                            </label>
                          </div>                                          
                        </div>
                  </div>

                    <div class="col-sm-4">
                        <label>Status</label>
                        <div class="form-group clearfix">
                            
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" {{$course->status==1?"checked":""}} value="1" id="radioSuccess1">
                              <label for="radioSuccess1"> Active
                              </label>
                            </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" {{$course->status==0?"checked":""}} value="0" id="radioSuccess2">
                              <label for="radioSuccess2">
                                  Inactive
                              </label>
                            </div>
                            
                          </div>
                    </div> 
                  
                  </div>
                  <div class="d-flex justify-content-center mt-4">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
                    <a class="btn btn-info ml-2" href="{{route('course.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
