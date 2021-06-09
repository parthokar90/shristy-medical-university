@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Grading System</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item active">Grading System List</li>
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

        <div class="col-6">
          <!-- right column -->
          
          <!-- general form elements disabled -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Grade Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              @if(isset($grad))
              <form role="form" method="POST" action="{{route('grading.update',$grad->id)}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Max Score</label>
                        <input type="text" name="maxScore" required value="{{$grad->maxScore}}" id="maxScore" class="form-control" placeholder="Enter Max Score">
                      </div>
                    </div>
                     </div>
                     <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="gradePoint">Grade Point</label>
                        <input name="gradePoint" type="text" required id="gradePoint" value="{{$grad->gradePoint}}" class="form-control" placeholder="Enter Grade Point">
                      </div>
                    </div>
                    </div> 

                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="letterGrade">Letter Grade</label>
                        <input name="letterGrade" type="text" value="{{$grad->letterGrade}}" id="letterGrade" class="form-control" placeholder="Enter Letter Grade">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                      <label>Piority</label>
                      <input name="piority" type="text" value="{{$grad->piority}}" id="piority" class="form-control" placeholder="Enter Piority">
                  </div> 
                    </div>

                     <div class="row">
                    
                    <div class="col-sm-12">
                        <label>Status</label>
                        <div class="form-group clearfix">
                            
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" {{$grad->status==1?'checked':''}} value="1" id="active">
                              <label for="active"> Active
                              </label>
                            </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" {{$grad->status==0?'checked':''}} value="0" id="inactive">
                              <label for="inactive">
                                  Inactive
                              </label>
                            </div>
                            
                          </div>
                    </div> 
                    </div> 

                    <div class="row">
                      <div class="col-sm-12">
                      
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
                   
                    </div>
                      </div>
                    </div>
                 
                
                </form>

              @else
             <form role="form" method="POST" action="{{route('grading.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Max Score</label>
                        <input type="text" name="maxScore" required id="maxScore" class="form-control" placeholder="Enter Max Score">
                      </div>
                    </div>
                     </div>
                     <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="gradePoint">Grade Point</label>
                        <input name="gradePoint" type="text" required id="gradePoint" class="form-control" placeholder="Enter Grade Point">
                      </div>
                    </div>
                    </div> 

                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="letterGrade">Letter Grade</label>
                        <input name="letterGrade" type="text" required id="letterGrade" class="form-control" placeholder="Enter Letter Grade">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                      <label>Piority</label>
                      <input name="piority" type="text" id="piority" class="form-control" placeholder="Enter Piority">
                  </div> 
                    </div>

                     <div class="row">
                    
                    <div class="col-sm-12">
                        <label>Status</label>
                        <div class="form-group clearfix">
                            
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" checked value="1" id="active">
                              <label for="active"> Active
                              </label>
                            </div>
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" value="0" id="inactive">
                              <label for="inactive">
                                  Inactive
                              </label>
                            </div>
                            
                          </div>
                    </div> 
                    </div> 

                    <div class="row">
                      <div class="col-sm-12">
                      
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-warning ml-2"><i class="fas fa-undo-alt"></i> Reset</button>
                    </div>
                      </div>
                    </div>
                 
                
                </form>
                @endif
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Group List</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm pull-right" >
                  <a href="{{route('grading.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Group</a> 
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
                    <th>Max Score</th>
                    <th>Grade Point</th>
                    <th>Letter Grade</th>
                    <th>Piority</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">

                  @foreach ($gradings as $key  => $item)
                  <tr class="{{$item->status==1?'':'bg-warning'}}">
                    <td>{{$key+1}}</td>
                    <td>{{$item->maxScore}}</td>
                    <td>{{$item->gradePoint}}</td>
                    <td>{{$item->letterGrade}}</td>
                    <td>{{$item->piority}}</td>
                    <td>{{$item->status==1?"Active":"Inactive"}}</td>
                    <td>
                      <a href="{{route('grading.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>

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
        {{$gradings->links()}}                  
      </div>    

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
