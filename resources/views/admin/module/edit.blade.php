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
              <form role="form" method="POST" action="{{route('module.update',$module->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Module Name</label>
                        <input type="text" value="{{$module->module_name}}" name="module_name" id="module_name" class="form-control" placeholder="Enter Module Name">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Module Code</label>
                          <input name="module_code" value="{{$module->module_code}}" type="text" id="module_code" class="form-control" placeholder="Enter Module Code">
                        </div>
                      </div>
                        <div class="col-sm-3">
                      <div class="form-group">
                        <label>Group </label>
                        <select name="group_id" id="group_id" class="form-control">
                          <option >Please Select</option>
                          @foreach ($groups as $item)
                            <option {{$module->group_id==$item->id?'selected':''}} value="{{$item->id}}">{{$item->group_title}}</option>  
                          @endforeach
                        </select>
                      </div>
                    </div> 

  
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Course </label>
                          <select name="course_id" id="course_id" class="form-control">
                            @foreach ($courses as $item)
                              <option {{$module->course_id==$item->id?'selected':''}} value="{{$item->id}}">{{$item->course_name}}</option>  
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    
                      <div class="row">                                                                       
                      <div class="col-sm-12">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Module Detail</label>
                        <textarea class="textarea form-control" name="details" rows="3" placeholder="Enter Course Details">{{$module->details}}</textarea>
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                          <label>Piority</label>
                          <input name="piority" type="text" value="{{$module->piority}}" id="piority" class="form-control" placeholder="Enter Piority">
                      </div> 
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Module Image</label>
                          <div class="custom-file">
                            <img src="{{asset('backend/module/'.$module->image)}}" alt="" style="height:100px;width:100px">
                              <input type="file" class="custom-file-input" id="customFile" name="image">
                              <label class="custom-file-label" for="customFile">Choose file</label>

                            </div>
                        </div>
                        </div>
                      <div class="col-sm-4">
                          <label>Status</label>
                          <div class="form-group clearfix">
                              
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$module->status==1?'checked':''}} value="1" id="radioSuccess1">
                                <label for="radioSuccess1"> Active
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status"  {{$module->status==0?'checked':''}} value="0" id="radioSuccess2">
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
                      <a class="btn btn-info ml-2" href="{{route('module.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
@section('js')
<script>
  $('#group_id').on('change',function(){
    var group_id=$('#group_id').val();
   
    $.ajax({
        type: "GET",
        url: "{{url('admin/getCourse')}}"+"/"+group_id,
        dataType: "json",
        success: function(response) {       
          var schema_one = '';
          $.each(response, function(i, item) {
            schema_one += '<option value="' + item.id + '">' + item.course_name + '</option>';
          });
          $('#course_id').html(schema_one);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          
        }
      })
  });
</script>
@endsection