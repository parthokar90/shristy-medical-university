@php 
use App\Model\admin\group;
$groups=group::where('status',1)->get();
@endphp
<body class="bg-light">
  <div class="header">
    <div class="d-flex justify-content-between align-items-center">
      <div class="col-md-3">
        <span class="logo">
          <img src="{{asset('user/img/logo.png')}}" height="68px" width="200px">
        </span>
      </div>
      <div class="col-md-3">
       Hello ! {{auth()->user()->name}}
     </div>
   </div>
 </div>
 <div class="">

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">Shristy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('user.home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
        </li>
           <li class="nav-item">
           <a class="nav-link" href="{{route('user.course')}}"><i class="fa fa-list" aria-hidden="true"></i>View Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.history')}}"><i class="fa fa-list" aria-hidden="true"></i>Result History</a>
        </li>

      
        @foreach($groups as $value)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i> {{$value->group_title}} </a>
            <ul class="dropdown-menu">
              @foreach($value->courses as $course)
                <li ><a href="{{route('user.getModule',$course->id)}}">{{$course->course_name}}</a></li>
               @endforeach
              </ul>
        </li>
        @endforeach
        {{-- <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Ranking</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Signout</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

      </ul>
    </div>
  </nav>