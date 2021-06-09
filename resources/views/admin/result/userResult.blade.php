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
            <div class="card-header">
              <h3 class="card-title">Result</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm pull-right" >

                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              @include('includes.messages')
              @foreach($groups as $group)
              <div class="col-md-12 h3 text-info text-center mt-4">{{$group->group_title}}</div>
              <div class="table-responsive mt-2">
                <table class="table table-striped title1 table-bordered text-center">
                  <tbody>
                    <tr>
                      <td><b>S.N.</b></td>
                      <td><b>Course Name</b></td>
                      <td><b>Modules</b></td>
                      <td><b>T.Quiz</b></td>
                      <td><b>Question</b></td>
                      <td><b>Correct</b></td>
                      <td><b>Wrong</b></td>
                      <td><b>Score</b></td>
                      <td><b>Action</b></td>
                    </tr>

                    @foreach ($group->courses as $key => $item)   
                    @php 
                    $id=$user->id;
                    $quizzes=0;
                    $moduleCount=DB::table('modules')->where('course_id',$item->id)->count();

                    $totalQuestion=DB::table('user_scores')->where('user_id',$id)->where('course_id',$item->id)->sum('totalQuestion');
                    $correct_ans=DB::table('user_scores')->where('user_id',$id)->where('course_id',$item->id)->sum('correct_ans');
                    $wrong_ans=DB::table('user_scores')->where('user_id',$id)->where('course_id',$item->id)->sum('wrong_ans');
                    $score=DB::table('user_scores')->where('user_id',$id)->where('course_id',$item->id)->sum('score');

                    $modules=DB::table('modules')->where('course_id',$item->id)->get();
                    if($modules->count() > 0){
                    foreach($modules as $mod){
                    $quizzes += DB::table('quizzes')->where('module_id',$mod->id)->count();
                  }
                }
                @endphp          
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$item->course_name}}</td>
                  <td>{{$moduleCount}}</td>
                  <td>{{$quizzes}}</td>
                  <td>{{$totalQuestion}}</td>
                  <td>{{$correct_ans}}</td>
                  <td>{{$wrong_ans}}</td>
                  <td>{{$score}}</td>

                  <td>          
                    <a href="{{route('quiz.getModule',['id'=>$item->id,'user_id'=>$user->id])}}" class="btn btn-primary" ><i class="fas fa-eye"></i> View Module
                    </a>                
                  </td>
                </tr>

                @endforeach             
              </tbody>
            </table>
          </div>
          @endforeach
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
