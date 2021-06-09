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
          <h1>Exam Session Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item active">Exam Session Edit</li>
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
              <h3 class="card-title">Exam Session Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form role="form" method="POST" action="{{route('examsess.update',$examsess->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">

                   <div class="col-sm-4">
                    <label for="name">Name</label>
                    <input name="name" type="text" id="name" value="{{$examsess->name}}" class="form-control" placeholder="Enter Name">
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exam_id">Exam</label>
                      <select name="exam_id" id="exam_id" class="form-control">
                        @foreach($exams as $exam)
                        <option {{$examsess->exam_id==$exam->id?'selected':''}} value="{{$exam->id}}">{{$exam->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="session_id">Course Session</label>
                      <select name="session_id" id="session_id" class="form-control">
                        @foreach($coursess as $value)
                        <option {{$examsess->session_id==$value->id?'selected':''}} value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div> 
                </div>
                <div class="row">

                  <div class="col-sm-4">
                    <label for="count">Count ( Parcent )</label>
                    <input name="count" type="text" value="{{$examsess->count}}" id="count" class="form-control" placeholder="Enter count">
                  </div>                

                  <div class="col-sm-4">
                    <label for="piority">Piority</label>
                    <input name="piority" type="text" value="{{$examsess->piority}}" id="piority" class="form-control" placeholder="Enter Piority">
                  </div> 

                  <div class="col-sm-4">
                    <label>Status</label>
                    <div class="form-group clearfix">

                      <div class="icheck-success d-inline">
                        <input type="radio" name="status" {{$examsess->status==1?"checked":""}} value="1" id="radioSuccess1">
                        <label for="radioSuccess1"> Active
                        </label>
                      </div>
                      <div class="icheck-success d-inline">
                        <input type="radio" name="status" {{$examsess->status==0?"checked":""}} value="0" id="radioSuccess2">
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
                    <a class="btn btn-info ml-2" href="{{route('examsess.index')}}"><i class="fas fa-step-backward"></i> Back</a>
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
