<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\consultantAvailability;

use App\Model\admin\consultant;
use App\Model\admin\service;

class ConsultantavailabilityController extends Controller
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
        $conavailabitys=consultantAvailability::paginate(10);
        return view('admin.conavailabity.view',compact('conavailabitys'))->with('title','Consultant Availability List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=service::where('status',1)->get();
        $consultants=consultant::where('status',1)->get();
        return view('admin.conavailabity.create',compact('services','consultants'))->with('title','Create New Consultant Availability');
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
            'service_id'=>'required',
            'consultant_id'=>'required',
        ]);
        
        $consultantAvailability=new consultantAvailability;
        $consultantAvailability->consultant_id=$request->consultant_id;
        $consultantAvailability->service_id=$request->service_id;
        $consultantAvailability->perPatientTime=$request->perPatientTime;
        $consultantAvailability->status=$request->status;
        $consultantAvailability->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('consultantavailabitiy.index'));
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
        $services=service::where('status',1)->get();
        $consultants=consultant::where('status',1)->get();
        $conavailabity=consultantAvailability::find($id);
        return view('admin.conavailabity.edit',compact('services','consultants','conavailabity'))->with('title','Edit Consultant Availability');
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
            'service_id'=>'required',
            'consultant_id'=>'required',
        ]);
        
        $consultantAvailability=consultantAvailability::find($id);
        $consultantAvailability->consultant_id=$request->consultant_id;
        $consultantAvailability->service_id=$request->service_id;
        $consultantAvailability->perPatientTime=$request->perPatientTime;
        $consultantAvailability->status=$request->status;
        $consultantAvailability->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('consultantavailabitiy.index'));
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
