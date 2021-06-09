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
              <table class="table table-striped title1 table-bordered text-center">
                <tbody>
                  <tr>
                    <td><b>S.N.</b></td>
                    <td><b>User Name</b></td>
                    <td><b>Quiz Score</b></td>                    
                    <td><b>Action</b></td>
                  </tr>

                  @foreach ($users as $key => $item)    
                  @php       
                 $score=DB::table('user_scores')->where('user_id',$item->id)->sum('score');               
                 @endphp
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>

                    <td>{{$score}}</td>
                    <td>   <a href="{{route('quiz.userResult',$item->id)}}" class="btn btn-info"> <i class="fas fa-eye"></i> Details</a></td>
                  </tr>

                  @endforeach             
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>


      <div class="d-flex justify-content-center">            
        {{$users->links()}}                  
      </div> 

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
