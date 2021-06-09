<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Model\admin\course_session;

use Session;


class SessionController extends Controller
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
        $groups=course_session::paginate(10);
        return view('admin.coursess.view',compact('groups'))->with('title','Course Session List');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.coursess.create')->with('title','Create New Course Session');
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
        
        $group=new course_session;
        $group->name=$request->name;
        $group->year=$request->year;
        $group->month=$request->month;
        $group->piority=$request->piority;
        $group->status=$request->status;
        $group->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('coursess.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $group=course_session::find($id);
        return view('admin.coursess.show',compact('group'))->with('title','View Course Session');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group=course_session::find($id);
        return view('admin.coursess.edit',compact('group'))->with('title','Edit Course Session');
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
        
        $group=course_session::find($id);
         $group->name=$request->name;
        $group->year=$request->year;
        $group->month=$request->month;
        $group->piority=$request->piority;
        $group->status=$request->status;
        $group->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('coursess.index'));
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
