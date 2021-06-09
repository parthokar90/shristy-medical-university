<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\faculty;

class FacultyController extends Controller
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
        $faculties=faculty::paginate(10);
        return view('admin.faculty.view',compact('faculties'))->with('title','Faculty List');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faculty.create')->with('title','Create New Faculty');
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
        $image_name=null;
        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(('backend/faculty'), $image_name);
        }
        
        $faculty=new faculty;
        $faculty->image=$image_name;
        $faculty->name=$request->name;
        $faculty->profileTitle=$request->profileTitle;
        $faculty->profile=$request->profile;
        $faculty->doctorTitle=$request->doctorTitle;
        $faculty->details=$request->details;
        $faculty->piority=$request->piority;
        $faculty->status=$request->status;
        $faculty->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('faculty.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faculty=faculty::find($id);
        return view('admin.faculty.show',compact('faculty'))->with('title','Edit Faculty');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty=faculty::find($id);
        return view('admin.faculty.edit',compact('faculty'))->with('title','Edit Faculty');
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
        $faculty=faculty::find($id);
        $image_name=$faculty->image;
        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(('backend/faculty'), $image_name);  
            if(file_exists('backend/faculty/'.$faculty->image)){        
                unlink('backend/faculty/'.$faculty->image);
            }
        }
        $faculty->image=$image_name;
        $faculty->name=$request->name;
        $faculty->profileTitle=$request->profileTitle;
        $faculty->profile=$request->profile;
        $faculty->doctorTitle=$request->doctorTitle;
        $faculty->status=$request->status;
        $faculty->piority=$request->piority;
        $faculty->save();
        session()->flash("success","Information update Successfully");
        return redirect(route('faculty.index'));
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
