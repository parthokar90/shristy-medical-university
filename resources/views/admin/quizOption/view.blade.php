@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3>Question List </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Quiz Question List</li>
            </ol>
          </div>
        </div>
        <div class="col-sm-12 mt-2 text-center">
         <h3> {{ucfirst($quiz->quiz_title)}}</h3>
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
                <h3 class="card-title">Quiz Question List</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm pull-right" >
                  <a href="{{route('createQuestion',$id)}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Question</a> 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @include('includes.messages')
                <table class="table table-hover table-striped table-bordered text-nowrap">
                  <thead class="text-center">
                    <tr>
                      <th>S/N</th>
                      <th>Question</th>
                      <th>Option1</th>
                      <th>Option2</th>
                      <th>Option3</th>
                      <th>Option4</th>
                      <th>Option5</th>
                      <th>Right Ans</th>
                      {{-- <th>Description</th> --}}
                      {{-- <th>Status</th> --}}
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">                   
                    @foreach ($questions as $item)
                    <tr class="{{$item->status==1?"":"bg-warning"}}">
                    <td>{{$item->serial}}</td>
                    <td>{{$item->question}}</td>
                    <td>{{$item->option1}}</td>
                    <td>{{$item->option2}}</td>
                    <td>{{$item->option3}}</td>
                    <td>{{$item->option4}}</td>
                    <td>{{$item->option5}}</td>
                    <td>{{$item->correct_ans}}</td>
                    {{-- <td>{{$item->discription}}</td> --}}
                    {{-- <td>{{$item->status==1?"Active":"Inactive"}}</td> --}}
                    <td>
                    <a href="{{route('quizoption.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                     <a href="{{route('quizoption.show',$item->id)}}" class="btn btn-info"> <i class="fas fa-eye"></i> View</a>
                     {{-- <a href="{{route('questionList',$item->id)}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Question</a> --}}
                    </td>
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
                  {{$questions->links()}}                  
        </div>    
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
