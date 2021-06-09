
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        
      </ul>
  
      
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{route('admin.home')}}" class="brand-link">
        <img src="{{ asset ('admin/img/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Shristy</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                 <li class="nav-item">
                 <a href="{{route('admin.home')}}" class="nav-link {{isset($page) && $page=='home'?'active':''}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Dashboard
                      
                    </p>
                  </a>
                </li>
            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Student
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Student List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Student</p>
                  </a>
                </li>
               <li class="nav-item">
                  <a href="{{route('download.student.marksheet')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Download Mark Sheet</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Semester
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('semesters.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Semester List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('semesters.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Semester</p>
                  </a>
                </li>
              </ul>
            </li>

           <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Faculty
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('faculty.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Faculties</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('faculty.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New faculty</p>
                  </a>
                </li>
              </ul>
            </li>

         
           <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Consultant
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('consultant.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Consultants</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('consultant.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Consultant</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Con. Availabitiy
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('consultantavailabitiy.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('consultantavailabitiy.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add New</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>Appointment
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('appointment.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Appointments</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('appointment.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Appointment</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>Notice
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('notice.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Notices</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('notice.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Notice</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="{{route('ranking.index')}}" class="nav-link {{isset($page) && $page=='ranking'?'active':''}}">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                   Ranking
                   
                 </p>
               </a>
             </li>
            <li class="nav-item">
              <a href="{{route('result.index')}}" class="nav-link {{isset($page) && $page=='result'?'active':''}}">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                   Result
                   
                 </p>
               </a>
             </li> 
             <li class="nav-item">
              <a href="{{route('marksheet')}}" class="nav-link {{isset($page) && $page=='marksheet'?'active':''}}">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                   Marks Sheet
                   
                 </p>
               </a>
             </li>
            <li class="nav-item">
              <a href="{{route('grading.index')}}" class="nav-link {{isset($page) && $page=='grading'?'active':''}}">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                   Grading System
                   
                 </p>
               </a>
             </li>

             <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Patient
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('patient.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Patient List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('patient.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Patient</p>
                  </a>
                </li>
              </ul>
            </li>


            {{-- <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Appoinments
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('appointment.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Appoinment List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('appointment.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Appoinment</p>
                  </a>
                </li>
              </ul>
            </li> --}}


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Group
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('group.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Group List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('group.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Group</p>
                  </a>
                </li>
              </ul>
            </li>  


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Exam
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('exam.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Exam List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('exam.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Exam</p>
                  </a>
                </li>
              </ul>
            </li> 

             <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Exam Session
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('examsess.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Exam Session List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('examsess.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Exam Session</p>
                  </a>
                </li>
              </ul>
            </li> 

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Course Session
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('coursess.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Course Session List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('coursess.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Course Session</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Course
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('course.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Course List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('course.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Course</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item has-treeview {{isset($page) && ($page=='module'|| $page=='newModule')?'menu-open':''}}">
              <a href="#" class="nav-link {{isset($page) && ($page=='module'|| $page=='newModule')=='module'?'active':''}}">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Modules
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('module.index')}}" class="nav-link {{isset($page) && ($page=='module')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Module List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('module.create')}}" class="nav-link {{isset($page) && ($page=='newModule')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Module</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item has-treeview {{isset($page) && ($page=='quiz'|| $page=='newquiz')?'menu-open':''}}">
              <a href="#" class="nav-link {{isset($page) && ($page=='quiz'|| $page=='newquiz')?'active':''}}">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Quiz
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('quiz.index')}}" class="nav-link {{isset($page) && ($page=='quiz')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Quiz List</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{{route('quiz.create')}}" class="nav-link {{isset($page) && ($page=='newquiz')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Quiz</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('logout')}}" class="nav-link"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" >
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                  Logout
                   
                 </p>
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
             </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>