@extends('user.layouts.master')
@section('content')
  <div class="container"><!--container start-->
    <div class="col-md-12">
      <div class="panel">
        <div class="col-md-12  text-primary text-center mt-4 mb-4">
         <span class="text-info h2"> Course Name: course name here </span><br>
         <span class="text-primary h3"> Module Name: {{$quizzes[0]->module->module_name}} </span><br>
         </div>
        <div class="table-responsive mt-2">
          <table class="table table-striped title1 text-center">
            <tbody>
             <tr>
                <td><b>S.N.</b></td>
                <td><b>Topic</b></td>
                <td><b>Total question</b></td>
                <td><b>Need To Answer</b></td>
                <td><b>Marks</b></td>
                <td><b>Time limit</b></td>
                <td><b>Action</b></td>
              </tr>
             @foreach ($quizzes as $key => $item)    
             @php 
              $info=DB::table('quiz_meta')
                ->where('quiz_id',$item->id)
                ->where('user_id',Auth::user()->id)
                ->where('finish',1)
                ->first();
             @endphp         
              @if($info==null)
              <tr>
              <td>{{$key+1}}</td>
              <td>{{$item->quiz_title}}</td>
              <td>{{$item->total_quiz}}</td>
              <td>{{$item->need_to_answer}}</td>
              <td>{{$item->correct_mark}}</td>
              <td>{{$item->total_time}} minit</td>
              <td>
                    <a href="{{route('user.startQuiz',$item->id)}}" class="btn btn-primary" ><i class="fas fa-play"></i> Start
                    </a>
              </td>
              </tr>
              @endif
              @endforeach           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection