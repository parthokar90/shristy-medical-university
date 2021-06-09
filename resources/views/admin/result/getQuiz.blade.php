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
              <div class="col-md-12 h2 text-primary text-center mt-4 mb-4">{{$module->module_name}}</div>
              <div class="table-responsive mt-2">
                @if($quizzes->count() > 0)
                <table class="table table-striped title1 table-bordered text-center">
                  <tbody>
                    <tr>
                      <td><b>S.N.</b></td>
                      <td><b>Quiz Title</b></td>
                      <td><b>Total Quiz</b></td>                 
                      <td><b>Need to Ans</b></td>
                      <td><b>Correct Mark</b></td>
                      <td><b>Wrong Mark</b></td>
                      <td><b>Score</b></td>
                    </tr>

                    @foreach ($quizzes as $key => $item) 

                    @php
                    $scoreInfo=DB::table('user_scores')->where('quiz_id',$item->id)->where('user_id',$user->id)->first();                
                    @endphp
                          
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$item->quiz_title}}</td>
                      <td>{{$item->total_quiz}}</td>
                      <td>{{$item->need_to_answer}}</td>
                      <td>{{$scoreInfo!=null?$scoreInfo->correct_ans:'0'}}</td>
                      <td>{{$scoreInfo!=null?$scoreInfo->wrong_ans:'0'}}</td>
                      <td>{{$scoreInfo!=null?$scoreInfo->score:'0'}}</td>
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
