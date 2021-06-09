@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Course List</li>
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
                <h3 class="card-title">Course List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm pull-right" >
                  <a href="{{route('course.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Course</a> 
                    {{-- <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div> --}}
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
                      <th>Course Code</th>
                      <th>Course Name</th>
                      <th>Latest</th>
                      <th>Piority</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @php
                       $i=1; 
                    @endphp
                    @foreach ($courses as $item)
                    <tr class="{{$item->status==1?"":"bg-warning"}}">
                    <td>{{$i}}</td>
                    <td>{{$item->course_code}}</td>
                    <td>{{$item->course_name}}</td>
                    <td>{{($item->latestCourseStatus==1)?"Yes":"No"}}</td>
                    <td>{{$item->piority}}</td>
                    <td><img src="{{asset('backend/course/'.$item->image)}}" alt="" style="width:100px;height:100px"> </td>
                    <td>{{$item->status==1?"Active":"Inactive"}}</td>
                    <td>
                      <a href="{{route('course.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    <a href="{{route('course.show',$item->id)}}" class="btn btn-info"> <i class="fas fa-eye"></i> View</a>
                    {{-- <form id="delete-{{$item->id}}" action="{{route('course.destroy',$item->id) }}" method="POST" class="d-none">
                      {{csrf_field()}}
                      {{method_field('delete')}}
                  </form>
                  <a href="" onclick="
                  if(confirm('Are you sure, You want to delete this?'))
                  {
                    event.preventDefault();
                  document.getElementById('delete-{{$item->id}}').submit();
                  }
                  else{
                    event.preventDefault();
                  }
                  " class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete</a> --}}
                    </td>
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


        <div class="d-flex justify-content-center">            
                  {{$courses->links()}}                  
        </div>    
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
