@extends('user.layouts.master')
@section('content')
<div class="container"><!--container start-->
  <div class="col-md-12">
    <div class="panel card mt-5">
      <div class="col-md-12 h2 text-primary text-center mt-4">Question No: {{$question_no}}</div>
      <div class="d-flex flex-column ml-3 pb-4">
        <div class="bm-4 font-weight-bold">Question: {{$quizzes->question}}</div>    
        @if($quizzes->image!='')
        <div class="mb-4"><img src="{{asset('backend/quiz/'.$quizzes->image)}}" alt="" style="height: 200px;width:300px"></div>
        @endif
        <form role="form" method="POST" action="{{route('user.saveQuiz')}}" enctype="multipart/form-data">
          {{csrf_field()}}        
          <input type="hidden" name="id" value="{{$quizzes->id}}">
        <div class="d-flex flex-column">
          <div class="custom-control custom-radio mb-4">
            <input type="radio" id="customRadio1" required name="answer" class="custom-control-input" value="option1">
            <label class="custom-control-label" for="customRadio1">{{$quizzes->option1}}</label>
          </div>
          <div class="custom-control custom-radio mb-4">
            <input type="radio" id="customRadio2"  requiredname="answer" class="custom-control-input" value="option2">
            <label class="custom-control-label" for="customRadio2">{{$quizzes->option2}}</label>
          </div> 
          <div class="custom-control custom-radio mb-4">
            <input type="radio" id="customRadio3" required name="answer" class="custom-control-input" value="option3">
            <label class="custom-control-label" for="customRadio3">{{$quizzes->option3}}</label>
          </div> 
          <div class="custom-control custom-radio mb-4">
            <input type="radio" id="customRadio4" required name="answer" class="custom-control-input" value="option4">
            <label class="custom-control-label" for="customRadio4">{{$quizzes->option4}}</label>
          </div>
         
          @if(isset($quizzes->option5))
          <div class="custom-control custom-radio mb-4">
            <input type="radio" id="customRadio5" required name="answer" class="custom-control-input" value="option5">
            <label class="custom-control-label" for="customRadio5">{{$quizzes->option5}}</label>
          </div>
          @endif
        </div>          
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"> </i> Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection