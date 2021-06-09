@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ranking</h1>
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
                <h3 class="card-title">Ranking</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm pull-right" >
                  
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @include('includes.messages')
                <table class="table table-striped title1 table-bordered">
                  <tbody>
                    <tr>
                      <td><b>S.N.</b></td>
                      <td><b>User</b></td>
                      {{-- <td><b>Quiz Name</b></td>
                      <td><b>Total Question</b></td>
                      <td><b>Right Answer</b></td>
                      <td><b>Wrong Answer</b></td> --}}
                      <td><b>Marks</b></td>
                    </tr>
                    @php
                        $i=1;
                    @endphp
                   @foreach ($scores as $item)             
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->user->name}}</td>
                    {{-- <td>{{$item->quiz->quiz_title}}</td>
                    <td>{{$item->totalQuestion}}</td>
                    <td>{{$item->correct_ans}}</td>
                    <td>{{$item->wrong_ans}}</td> --}}
                    <td>{{$item->total}}</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach             
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


        {{-- <div class="d-flex justify-content-center">            
                  {{$quizzes->links()}}                  
        </div>     --}}
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
