@extends('user.layouts.master')
@section('content')
  <div class="container"><!--container start-->
    <div class="col-md-12">
      <div class="panel">
        <div class="col-md-12 h2 text-primary text-center mt-4">@if(isset($semester->semister_name)) Your Current Semester is:  {{$semester->semister_name}} @endif </div>

    @if(isset($semester->semister_name))
        <table class="table table-bordered">
          <tr>
            <th>Sl</th>
            <th>Course</th>
            <th>Cost</th>
            <th>Action</th>
          </tr>
          @php $totalCost=0; @endphp
          @foreach($course as $key=>$item)
           @php $totalCost+=$item->costing; @endphp
           <tr>
            <td>{{++$key}}</td>
            <td>{{$item->course_name}}</td>
            <td>{{number_format($item->costing)}}</td>
            <td>@if($semester->payableAmount=='') Please Pay Now to view module @else 
            <a href="{{route('user.getModule.student',$item->id)}}" class="btn btn-primary" ><i class="fas fa-eye"></i> View Module  @endif</td>
          </tr>
          @endforeach 
          @if($semester->payableAmount=='') 
          <tfoot>
           <tr>
            <td>Total Payable Amount</td>
            <td></td>
            <td>{{number_format($totalCost)}}</td>
            <td></td>
           </tr>
          </tfoot>
          @endif 
        </table>
         @if($semester->payableAmount=='') 
            <!-- <a class="btn btn-success" href="{{url('user/course/payment/'.base64_encode($semester->id).'/'.base64_encode(auth()->user()->id))}}">Pay Now</a> -->

            <a class="btn btn-success" href="{{url('/payment')}}">Pay Now</a>

       
          @endif 
        @else 
        <h1 class="text-center"> You have not registration any course </h1>
       @endif  
   
            
    </div>
  </div>
</div>
</div>
@endsection