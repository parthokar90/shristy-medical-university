@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Download Marks Sheet </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Download Marks Sheet</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm pull-right" >

                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              @include('includes.messages')
                 <form method="post" action="{{route('download.student.marksheet.pdf')}}">
                @csrf
             <div class="d-flex flex-wrap">


          
                <div class="col-md-4">
                   <div class="form-group">
                     <label>Select Semester</label>
                       <select class="form-control js-example-basic-single" name="semester_id">
                           <option value="0" selected>All</option>
                            @foreach($semester as $s)
                            <option value="{{$s->id}}">{{$s->semister_name}}</option>
                            @endforeach 
                       </select>
                   </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                       <label>Select Student</label>
                       <select class="form-control js-example-basic-single1" name="student_id">
                            @foreach($student as $user)
                            <option value="{{$user->id}}">{{$user->registration_no}}-{{$user->name}}</option>
                            @endforeach 
                       </select>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                     <button style="margin-top: 32px;" type="submit" class="btn btn-success">Download</button>
                  </div>
                <div>
         




                
             </div>

            </div>
            <!-- /.card-body -->
          </div>
              </form> 
          <!-- /.card -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.js-example-basic-single').select2();
    $('.js-example-basic-single1').select2();
</script>
@endsection
