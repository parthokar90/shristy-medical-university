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
                <td><b>Question</b></td>
                <td><b>Correct Ans</b></td>
                <td><b>Given Answer</b></td>
                <td><b>Score</b></td>
                <td><b>Details</b></td>
              </tr>
              @php
                  $i=1;
              @endphp
             @foreach ($quiz_option as $item)   
             @php
              $result=$item->correct_ans;  
              $given=$item->given_ans;  
             
             @endphp
              <tr>
              <td>{{$i}}</td>
              <td>{{$item->question}}</td>
              <td>{{$item->$result}}</td>
              <td>{{$item->$given}}</td>
              <td>{{$item->score}}</td>
              <td>{{$item->description->discription}}</td>
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