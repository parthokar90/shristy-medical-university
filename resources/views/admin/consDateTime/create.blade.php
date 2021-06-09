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
            <h1>Availability Date Time</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Availability Date Time</li>
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
                <h3 class="card-title">Availability Date Time Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" method="POST" action="{{route('consDateTime.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="consultant_availability_id" value="{{$id}}">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="consultant_id">Date</label>
                        <div class="input-group date" id="date" data-target-input="nearest" placeholder="Date">
                          <input type="text" id="dateInput" class="form-control datetimepicker-input" data-target="#date" placeholder="Date"/>
                          <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="startTime">Start Time</label>
                        <div class="input-group date" id="startTime" data-target-input="nearest" placeholder="Start Time">
                          <input type="text" id="startTimeInput" class="form-control datetimepicker-input" placeholder="Start Time" data-target="#startTime"/>
                          <div class="input-group-append" data-target="#startTime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                          </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <label for="endTime">End Time</label>
                      <div class="input-group date" id="endTime" data-target-input="nearest" placeholder="End Time">
                        <input type="text" id="endTimeInput" class="form-control datetimepicker-input" placeholder="End Time" data-target="#endTime"/>
                        <div class="input-group-append" data-target="#endTime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                        </div>
                    </div> 
                    <div class="col-sm-3">
                      <label for="">Action</label>
                      <div class="input-group ">
                      <button type="button" class="btn btn-primary" id="addButton"><i class="fas fa-plus"></i> Add</button>
                    </div>
                    </div> 
                  </div>
                  <div class="row" id="app">

                    <table class="table table-bordered table-striped text-center" id="dateTable">
                      <thead class="thead-dark">
                        <tr>
                          <th>Date</th>
                          <th>Start</th>
                          <th>End</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
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
                    <a class="btn btn-info ml-2" href="{{route('consultantavailabitiy.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
  $('#date').datetimepicker({
    format: 'DD/MM/YYYY'
    });

    $('#startTime,#endTime').datetimepicker({
      format: 'HH:mm',
    });
    $('#addButton').on('click',function(){
      var startTime=$('#startTimeInput').val();
      var endTime=$('#endTimeInput').val();
      var date=$('#dateInput').val();
      
      var str = '<tr><td>  ' + date + '<input type="hidden" name="datearray[]" value="' + date + '"></td><td><input type="hidden"  name="startTime[]" value="' + startTime + '">'+startTime+'</td><td><input type="hidden"  name="endTime[]"  value="' + endTime + '">' + endTime + '</td><td><button type="button" class="btn btn-danger" onClick="$(this).parent().parent().remove();"><i class="fa fa-trash"></i> Remove</button></td></tr>';
            $('#dateTable').append(str);

    });
</script>
@stop
