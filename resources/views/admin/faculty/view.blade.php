@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Faculty</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Faculty List</li>
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
                <h3 class="card-title">Faculty List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm pull-right" >
                  <a href="{{route('faculty.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Faculty</a> 
                   
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
                      <th>Name</th>
                      {{-- <th>Degree</th> --}}
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
                    @foreach ($faculties as $item)
                    <tr class="{{$item->status==1?'':'bg-warning'}}">
                    <td>{{$i}}</td>
                    <td>{{$item->name}}</td>
                    {{-- <td>{!! $item->doctorTitle !!}</td> --}}
                    <td>{{$item->piority}}</td>
                    <td><img src="{{asset('backend/faculty/'.$item->image)}}" alt="" style="width:100px;height:100px"> </td>
                    <td>{{$item->status==1?"Active":"Inactive"}}</td>
                    <td>
                      <a href="{{route('faculty.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    <a href="{{route('faculty.show',$item->id)}}" class="btn btn-info"> <i class="fas fa-eye"></i> View</a>
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
                  {{$faculties->links()}}                  
        </div>    
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
