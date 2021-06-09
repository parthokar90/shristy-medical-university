@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Result List</h1>
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
          
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              @include('includes.messages')
              <div class="col-md-12 h2 text-primary text-center mt-4 mb-4">{{$course->course_name}}</div>
              <div class="table-responsive mt-2">
                @if($modules->count()>0)
                <table class="table table-striped title1 table-bordered text-center">
                  <tbody>
                    <tr>
                      <td><b>S.N.</b></td>
                      <td><b>Module Name</b></td>
                      <td><b>Module Code</b></td>                 
                      <td><b>Quiz</b></td>
                      <td><b>Quesion</b></td>
                      <td><b>Correct</b></td>
                      <td><b>Wrong</b></td>
                      <td><b>Score</b></td>
                      <td><b>Action</b></td>
                    </tr>

                    @foreach ($modules as $key => $item) 
                    @php
                    
                    @endphp            
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$item->module_name}}</td>
                      <td>{{$item->module_code}}</td>
                      <td>{{$item->quiz->count()}}</td>
                      <td>Quesion</td>
                      <td>Correct</td>
                      <td>Wrong</td>
                      <td>Score</td>
               
                      <td>                              
                        <a href="{{route('quiz.quizList',['id'=>$item->id,'user_id'=>$user->id])}}" class="btn btn-primary" ><i class="fas fa-play"></i> View Quiz
                        </td>
                      </tr>            
                      @endforeach             
                    </tbody>
                  </table>
                    @else
              <div class="text-center bg-danger font-weight-bold mt-2 pt-2 pb-2 h2">
                No Module This Course
              </div>
              @endif
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>



    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
