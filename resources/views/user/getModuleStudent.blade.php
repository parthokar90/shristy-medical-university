@extends('user.layouts.master')
@section('content')
  <div class="container"><!--container start-->
    <div class="col-md-12">
       @include('includes.messages')
      <div class="panel">
        <div class="col-md-12 h2 text-primary text-center mt-4 mb-4">
          @if(isset($modules[0]))
          {{$modules[0]->course->course_name}}
          @endif
        </div>

        <div class="table-responsive mt-2">
          <table class="table table-striped title1">
            <tbody>
              <tr>
                <td><b>S.N.</b></td>
                <td><b>Module Name</b></td>
                <td><b>Module Code</b></td>                
                <td><b>Status</b></td>
                <td><b>Action</b></td>
              </tr>
           
             @foreach ($modules as $key => $item)             
              <tr>
              <td>{{$key+1}}</td>
              <td>{{$item->module_name}}</td>
              <td>{{$item->module_code}}</td>
              <td>{{$item->status==1?'Active':'Inactive'}}</td>
              <td>                              
              <a href="{{route('user.quizList',$item->id)}}" class="btn btn-primary" ><i class="fas fa-play"></i> Quiz List
              </td>
              </tr>            
              @endforeach             
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection