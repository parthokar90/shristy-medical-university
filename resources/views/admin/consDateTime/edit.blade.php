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
                <h3 class="card-title">Date Time Availabiity</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('consDateTime.update',$conavaildate->id)}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row">
                      {{-- <input type="hidden" name="id" value="{{$conavaildate->id}}"> --}}
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="consultant_id">Date</label>
                          <div class="input-group date" id="date" name="date" data-target-input="nearest" value="{{$conavaildate->date}}" placeholder="Date">
                            <input type="text" id="dateInput"  name="date" class="form-control datetimepicker-input" data-target="#date" value="{{$conavaildate->date}}" placeholder="Date"/>
                            <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                        </div>
                      </div>
                      
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="startTime">Start Time</label>
                          <div class="input-group date" name="startTime" id="startTime" data-target-input="nearest" placeholder="Start Time">
                            <input type="text" id="startTimeInput" name="startTime" class="form-control datetimepicker-input" placeholder="Start Time" value="{{$conavaildate->startTime}}" data-target="#startTime"/>
                            <div class="input-group-append" data-target="#startTime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <label for="endTime">End Time</label>
                        <div class="input-group date" name="endTime" id="endTime" data-target-input="nearest" placeholder="End Time">
                          <input type="text" id="endTimeInput" name="endTime" class="form-control datetimepicker-input" placeholder="End Time" value="{{$conavaildate->endTime}}" data-target="#endTime"/>
                          <div class="input-group-append" data-target="#endTime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                          </div>
                          </div>
                      </div> 
                      <div class="col-sm-3">
                          <label>Status</label>
                          <div class="form-group clearfix">                            
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status" {{$conavaildate->status==1?'checked':''}} value="1" id="radioSuccess1">
                                <label for="radioSuccess1"> Active
                                </label>
                              </div>
                              <div class="icheck-success d-inline">
                                <input type="radio" name="status"  {{$conavaildate->status==0?'checked':''}} value="0" id="radioSuccess2">
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
                      <a class="btn btn-info ml-2" href="{{route('consDateTimeList.index',$conavaildate->id)}}"><i class="fas fa-step-backward"></i> Back</a>
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
@section('js')
<script>
  var dateNow = '<?php echo $conavaildate->date;?>';
  console.log(dateNow);
  $('#date').datetimepicker({
    ignoreReadonly: true,
    useCurrent: false,
    sideBySide: true,
    format: 'YYYY-MM-DD',
    defaultDate:dateNow,
    });

    $('#startTime,#endTime').datetimepicker({
      format: 'HH:mm',
    });
   
</script>
@stop
