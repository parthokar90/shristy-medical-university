<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Model\admin\exam;
use App\Model\admin\course_session;
use App\Model\admin\exam_session;

use Session;


class ExamsessionController extends Controller
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
        //
        $groups=exam_session::paginate(10);
        return view('admin.examsess.view',compact('groups'))->with('title','Exam List');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $exams=exam::where('status',1)->get();
       $coursess=course_session::where('status',1)->get();
       return view('admin.examsess.create',compact('exams','coursess'))->with('title','Create New Exam');
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
        'exam_id'=>'required',
    ]);
       
       $group=new exam_session;
       $group->name=$request->name;
       $group->exam_id=$request->exam_id;
       $group->session_id=$request->session_id;
       $group->count=$request->count;
       $group->piority=$request->piority;
       $group->status=$request->status;
       $group->save();
       session()->flash("success","Information saved Successfully");
       return redirect(route('examsess.index'));
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $group=exam_session::find($id);
     return view('admin.examsess.show',compact('group'))->with('title','View Exam');
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examsess=exam_session::find($id);

       $exams=exam::where('status',1)->get();
       $coursess=course_session::where('status',1)->get();

        return view('admin.examsess.edit',compact('examsess','exams','coursess'))->with('title','Edit Exam');
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
        'exam_id'=>'required',
    ]);
       
       $group=exam_session::find($id);
       $group->name=$request->name;
       $group->exam_id=$request->exam_id;
       $group->session_id=$request->session_id;
       $group->count=$request->count;
       $group->piority=$request->piority;
       $group->status=$request->status;
       $group->save();
       session()->flash("success","Information saved Successfully");
       return redirect(route('examsess.index'));
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
