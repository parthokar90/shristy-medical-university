@extends('user.layouts.master')
@section('content')
  <div class="container"><!--container start-->
    <div class="col-md-12">
      <div class="panel">
        <div class="col-md-12 h2 text-primary text-center mt-4">History</div>
        <div class="table-responsive mt-2">
          <table class="table table-striped title1 table-bordered">
            <tbody>
              <tr>
                <td><b>S.N.</b></td>
                <td><b>Quiz Name</b></td>
                <td><b>Total Answer</b></td>
                <td><b>Right Answer</b></td>
                <td><b>Wrong Answer</b></td>
                <td><b>Marks</b></td>
                <td><b>Details</b></td>
              </tr>
              @php
                  $i=1;
              @endphp
             @foreach ($scores as $item)   
                     
              <tr>
              <td>{{$i}}</td>
              <td>{{$item->quiz->quiz_title}}</td>
              <td>{{$item->correct_ans+$item->wrong_ans}}</td>
              <td>{{$item->correct_ans}}</td>
              <td>{{$item->wrong_ans}}</td>
              <td>{{$item->score}}</td>
              <td><a href="{{route('user.answerDetails',$item->quiz_id)}}" class="btn btn-info"><i class="fas fa-eye"></i> Details</a></td>
              </tr>
              @php
                  $i++;
              @endphp
              @endforeach             
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection