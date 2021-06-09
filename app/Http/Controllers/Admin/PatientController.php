<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
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
        $patients=patient::paginate(10);
        return view('admin.patient.view',compact('patients'))->with('title','Patients List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patient.create')->with('title','Create New Patient');
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
            'mobile'=>'required',
            'name'=>'required',
        ]);
        
        $patient=new patient;
        $patient->name=$request->name;
        $patient->email=$request->email;
        $patient->mobile=$request->mobile;
        $patient->status=$request->status;
        $patient->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('patient.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $patient=patient::find($id);
        return view('admin.patient.edit',compact('patient'))->with('title','Edit Patient');
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
            'mobile'=>'required',
            'name'=>'required',
        ]);
        
        $patient=patient::find($id);
        $patient->name=$request->name;
        $patient->email=$request->email;
        $patient->mobile=$request->mobile;
        $patient->status=$request->status;
        $patient->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('patient.index'));
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
