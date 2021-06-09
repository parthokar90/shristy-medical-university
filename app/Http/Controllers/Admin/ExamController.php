<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Model\admin\exam;

use Session;


class ExamController extends Controller
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
        $groups=exam::paginate(10);
        return view('admin.exam.view',compact('groups'))->with('title','Exam List');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.exam.create')->with('title','Create New Exam');
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
        'name'=>'required',
    ]);
       
       $group=new exam;
       $group->name=$request->name;
       $group->year=$request->year;
       $group->month=$request->month;
       $group->piority=$request->piority;
       $group->status=$request->status;
       $group->save();
       session()->flash("success","Information saved Successfully");
       return redirect(route('exam.index'));
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $group=exam::find($id);
     return view('admin.exam.show',compact('group'))->with('title','View Exam');
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group=exam::find($id);
        return view('admin.exam.edit',compact('group'))->with('title','Edit Exam');
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
        'name'=>'required',
    ]);
       
       $group=exam::find($id);
       $group->name=$request->name;
       $group->piority=$request->piority;
       $group->status=$request->status;
       $group->save();
       session()->flash("success","Information saved Successfully");
       return redirect(route('exam.index'));
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
