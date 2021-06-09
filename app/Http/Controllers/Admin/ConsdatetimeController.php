<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Model\admin\conavaildate;

class ConsdatetimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($id)
    {
        $conavaildates = conavaildate::where('consultant_availability_id',$id)->paginate(10);
        $info=array(
            'id'=>$id,
            'title'=>'Consultant Availability list'
        );
        return view('admin.consDateTime.view',compact('conavaildates'))->with($info);
    }

    public function create($id)
    {
        $info=array(
            'id'=>$id,
            'title'=>'Create Consultant Availability'
        );
        return view('admin.consDateTime.create')->with($info);
    }
    

    public function store(Request $request)
    {
        $this->validate($request,[
            'status'=>'required',
        ]);
        
        $total=count($request->datearray);
        
        for($i=0; $i < $total;$i++){
            $conavaildate=new conavaildate;
            $conavaildate->consultant_availability_id=$request->consultant_availability_id;
            $conavaildate->date=Carbon::createFromFormat('d/m/Y', $request->datearray[$i])->format('Y-m-d');
            $conavaildate->startTime=$request->startTime[$i];
            $conavaildate->endTime=$request->endTime[$i];
            $conavaildate->status=$request->status;            
            $conavaildate->save();
        }
        session()->flash("success","Information saved Successfully");
        return redirect(route('consDateTimeList.index',$request->consultant_availability_id));
    }

    public function edit($id)
    {
        $conavaildate = conavaildate::find($id);
        $info=array(
            'title'=>'Edit Consultant Availability'
        );
        
        return view('admin.consDateTime.edit',compact('conavaildate'))->with($info);
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'status'=>'required',
        ]);
        
        $conavaildate=conavaildate::find($id);
        $conavaildate->date=Carbon::createFromFormat('Y-m-d', $request->date)->format('Y-m-d');
        $conavaildate->startTime=$request->startTime;
        $conavaildate->endTime=$request->endTime;
        $conavaildate->status=$request->status;            
        $conavaildate->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('consDateTimeList.index',$conavaildate->consultant_availability_id));
    }
}
