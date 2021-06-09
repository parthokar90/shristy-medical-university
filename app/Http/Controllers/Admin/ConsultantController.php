<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\consultant;

class ConsultantController extends Controller
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
        $consultants=consultant::paginate(10);
        return view('admin.consultant.view',compact('consultants'))->with('title','Consultant List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.consultant.create')->with('title','Create New Consultant');
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
            $request->image->move(('backend/consultant'), $image_name);
        }
        
        $consultant=new consultant;
        $consultant->image=$image_name;
        $consultant->name=$request->name;
        $consultant->profile=$request->profile;
        $consultant->doctorTitle=$request->doctorTitle;
        $consultant->details=$request->details;
        $consultant->piority=$request->piority;
        $consultant->status=$request->status;
        $consultant->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('consultant.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultant=consultant::find($id);
        return view('admin.consultant.show',compact('consultant'))->with('title','View consultant');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultant=consultant::find($id);
        return view('admin.consultant.edit',compact('consultant'))->with('title','Edit Consultant');
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
        $consultant=consultant::find($id);
        $image_name=$consultant->image;
        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(('backend/consultant'), $image_name);  
            if(file_exists('backend/consultant/'.$consultant->image)){        
                unlink('backend/consultant/'.$consultant->image);
            }
        }
        $consultant->image=$image_name;
        $consultant->name=$request->name;
        $consultant->profile=$request->profile;
        $consultant->doctorTitle=$request->doctorTitle;
        $consultant->status=$request->status;
        $consultant->piority=$request->piority;
        $consultant->save();
        session()->flash("success","Information update Successfully");
        return redirect(route('consultant.index'));
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
