<?php

namespace App\Http\Controllers;

use App\Model\admin\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

   public function index(){
    $courses=course::where('status',1)
    ->where('group_id',1)
    ->get();
    // $courses=course::all();

    $courses2=course::where('status',1)
    ->where('group_id',2)
    ->get();

    $data=array(
        'title'=>'Course',
        'page'=>'course'
    );
    return view('courses',compact('courses','courses2'))->with($data);
   } 
   public function courseDetails($id){
       $course=course::find($id);
       $data=array(
           'title'=>'Course',
           'page'=>'course'
       );
       return view('courseDetails',compact('course'))->with($data);
   }
}
