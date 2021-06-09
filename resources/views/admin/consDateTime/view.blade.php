@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Counsultent</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Counsultent List</li>
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
                <h3 class="card-title">Consultant Avilability List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm pull-right" >
                  <a href="{{route('consDateTime.create',$id)}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Avilability Date</a> 
                   
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
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @php
                       $i=1; 
                    @endphp
                    @foreach ($conavaildates as $item)
                    <tr class="{{$item->status==1?'':'bg-warning'}}">
                    <td>{{$i}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->startTime}}</td>
                    <td>{{$item->endTime}}</td>
                    <td>{{$item->status==1?"Active":"Inactive"}}</td>
                    <td>
                    <a href="{{route('consDateTime.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    
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
                  {{$conavaildates->links()}}                  
        </div>    
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
