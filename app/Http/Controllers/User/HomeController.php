<?php

namespace App\Http\Controllers\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Model\admin\group;
use App\Model\admin\module;
use App\Model\admission;
use App\Model\SemisterCourse;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $modules=module::where('status',1)->get();
        $groups=group::where('status',1)->orderBy('piority','desc')->get();
        
        $quizzes = DB::table('quizzes')
        ->join('modules', 'modules.id', '=', 'quizzes.module_id')
        ->where('quizzes.status',1)
        ->select('quizzes.*', 'modules.module_name')
        ->get();

        $userPlayed=DB::table('user_scores')
        ->where('user_id',Auth::user()->id)
        ->select('quiz_id')
        ->get();

        $newVal=array();
        foreach($userPlayed as $value){
            $newVal[]=$value->quiz_id;
        }
       
        return view('user.home',compact('quizzes','newVal','modules','groups'))->with('title','User Home');
    }

    //user current couse

    public function userCourse(){

        $semester=admission::where('student_id',auth()->user()->id)
        ->where('admissions.status',1)
        ->leftjoin('semesters','semesters.id','=','admissions.semester_id')
        ->select('semesters.id','semesters.semister_name','payableAmount')
        ->first();

        if(isset($semester)){
           $s_id=$semester->id;
        }else{
           $s_id=0;  
        }

        $course=SemisterCourse::where('semister_id',$s_id)
        ->leftjoin('courses','courses.id','=','semister_courses.course_id')
        ->select('courses.*')
        ->get();

        return view('user.course.index',compact('semester','course'));
    }


     public function userCoursePayment($semesterid,$studentid){
        $semester_id=base64_decode($semesterid);
        $student_id=base64_decode($studentid);

         $course=SemisterCourse::where('semister_id',$semester_id)
        ->leftjoin('courses','courses.id','=','semister_courses.course_id')
        ->sum('costing');
        dd($course);

        
        return view('user.payment.index');
     }

}
