@extends('user.layouts.master')
@section('content')
<div class="container"><!--container start-->
  <div class="col-md-12">
    <div class="panel">
      <div class="col-md-12 h2 text-primary text-center mt-4">Quiz Score List</div>

      @foreach($groups as $group)
      <div class="col-md-12 h3 text-info text-center mt-4">{{$group->group_title}}</div>
      <div class="table-responsive mt-2">
        <table class="table table-striped title1">
          <tbody>
            <tr>
              <td><b>S.N.</b></td>
              <td><b>Module Name</b></td>
              <td><b>Modules</b></td>
              <td><b>T.Quiz</b></td>
              <td><b>Question</b></td>
              <td><b>Correct</b></td>
              <td><b>Wrong</b></td>
              <td><b>Score</b></td>
              <!-- <td><b>Action</b></td> -->
            </tr>
            
            @foreach ($group->courses as $key => $item)   

            @php 

            $id= Auth::user()->id;
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

            <!-- <td>          
              <a href="{{route('user.getModule',$item->id)}}" class="btn btn-primary" ><i class="fas fa-eye"></i> View Module
              </a>                 -->
            </td>
          </tr>

          @endforeach             
        </tbody>
      </table>
    </div>
    @endforeach
  </div>
</div>
</div>
</div>
@endsection