<?php

namespace App\Http\Controllers\admin;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\course;
use App\Model\admin\group;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        
        $courses=course::paginate(10);
        return view('admin.course.view',compact('courses'))->with('title','Course List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups=group::where('status',1)->get();
        return view('admin.course.create',compact('groups'))->with('title','Create New Course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $this->validate($request,[
            'course_name'=>'required',
            'course_code'=>'required'
        ]);
        $image_name=null;
        if($request->hasFile('image')){
        $image_name = time().'.'.$request->image->getClientOriginalExtension();
		$request->image->move(('backend/course'), $image_name);
        } 

         $homeIcon=null;
        if($request->hasFile('homeIcon')){
        $homeIcon = time().'.'.$request->homeIcon->getClientOriginalExtension();
        $request->homeIcon->move(('backend/course'), $homeIcon);
        }
        $icon=null;
        if($request->hasFile('icon')){
        $icon = time().'.'.$request->icon->getClientOriginalExtension();
        $request->icon->move(('backend/course'), $icon);
        }

        $inMenu=0;
        if(isset($request->inMenu)){
            $inMenu=1;
        }
        $inHome=0;
        if(isset($request->inHome)){
            $inHome=1;
        }
        $latestCourseStatus=0;
        if(isset($request->latestCourseStatus)){
            $latestCourseStatus=1;
        }
        $course=new course;
        $course->image=$image_name;
        $course->course_name=$request->course_name;
        $course->homeName=$request->homeName;
        $course->homeDesc=$request->homeDesc;
        $course->homeIcon=$homeIcon;
        $course->icon=$icon;
        $course->creditHour=$request->creditHour;
        $course->homePiority=$request->homePiority;
        $course->short_desc=$request->short_desc;
        $course->short_details=$request->short_details;
        $course->course_code=$request->course_code;
        $course->courseDuration=$request->courseDuration;
        $course->costing=$request->costing;
        $course->keyFeatures=$request->keyFeatures;
        $course->latestOrder=$request->latestOrder;
        $course->group_id=$request->group_id;
        $course->details=$request->details;
        $course->status=$request->status;
        $course->inMenu=$inMenu;
        $course->inHome=$inHome;
        $course->latestCourseStatus=$latestCourseStatus;
        $course->piority=$request->piority;
        $course->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('course.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=course::find($id);
        return view('admin.course.show',compact('course'))->with('title','View Course');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=course::find($id);
        $groups=group::where('status',1)->get();
        return view('admin.course.edit',compact('course','groups'))->with('title','Edit Course');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'course_name'=>'required',
            'course_code'=>'required'
        ]);
        $course=course::find($id);
        $image_name=$course->image;
        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(('backend/course'), $image_name);  
            if(file_exists('backend/course/'.$course->image)){        
                unlink('backend/course/'.$course->image);
            }
        }

        $homeIcon=$course->homeIcon;
        if($request->hasFile('homeIcon')){
        $homeIcon = time().'.'.$request->homeIcon->getClientOriginalExtension();
        $request->homeIcon->move(('backend/course'), $homeIcon);
        }
        $icon=$course->icon;;
        if($request->hasFile('icon')){
        $icon = time().'.'.$request->icon->getClientOriginalExtension();
        $request->icon->move(('backend/course'), $icon);
        }


       
        $inHome=0;
        if(isset($request->inHome)){
            $inHome=1;
        }
        $latestCourseStatus=0;
        if(isset($request->latestCourseStatus)){
            $latestCourseStatus=1;
        }
       $course->image=$image_name;
        $course->course_name=$request->course_name;
        $course->homeName=$request->homeName;
        $course->homeDesc=$request->homeDesc;
        $course->homeIcon=$homeIcon;
        $course->icon=$icon;
        $course->homePiority=$request->homePiority;
        $course->creditHour=$request->creditHour;
        $course->short_desc=$request->short_desc;
        $course->short_details=$request->short_details;
        $course->course_code=$request->course_code;
        $course->courseDuration=$request->courseDuration;
        $course->costing=$request->costing;
        $course->keyFeatures=$request->keyFeatures;
        $course->latestOrder=$request->latestOrder;
        $course->group_id=$request->group_id;
        $course->details=$request->details;        
        $course->status=$request->status;
        $course->inHome=$inHome;
        $course->latestCourseStatus=$latestCourseStatus;
        $course->piority=$request->piority;
        $course->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('course.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        course::find($id)->delete();
        return redirect()->back();
    }
}
