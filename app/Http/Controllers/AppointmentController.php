<?php

namespace App\Http\Controllers;
use App\Model\patient;
use App\Model\appointment;
use DB;

use App\Model\admin\service;
use App\Model\admin\consultant;
use App\Model\admin\consultantAvailability;

use Illuminate\Http\Request;

use Session;

class AppointmentController extends Controller
{
    public function index(){
        $services=service::where('status',1)->get();
        $data=array(
            'title'=>'Appointment',
            'page'=>'appintment'
        );
        return view('appointment',compact('services'))->with($data);
    }

    public function getConsultant($id){
        $consultants=DB::table('consultant_availabilitys')
        ->select('service_id','consultant_id','consultants.name')
        ->join('consultants', 'consultants.id', '=', 'consultant_availabilitys.consultant_id')
        ->where('service_id',$id)
        ->get();
        return response()->json($consultants);
    }

    public function saveAppointment(Request $request){
       $patient=patient::where('mobile',$request->mobile)->get();
     
      if(count($patient) > 0){
          $id=$patient[0]->id;          
      }
      else{
          $newPatient=new patient;
          $newPatient->name=$request->name;
          $newPatient->mobile=$request->mobile;
          $newPatient->email=$request->email;
          $newPatient->gender=$request->gender;
         $newPatient->save();
         $id=$newPatient->id;
       
      }
      $appointment=new appointment;
      $appointment->patient_id=$id;
      $appointment->service_id=$request->service;      
      $appointment->consultant_id=$request->consultant;      
      $appointment->message=$request->message;      
      $appointment->status=1;
      $appointment->save();
      session()->flash("success","Please select Date");
      return redirect(route('appoinmentFinish',$appointment->id));
    }

    public function appoinmentFinish($id){
        $appointment=appointment::find($id);       

        $conAvai=consultantAvailability::where('service_id',$appointment->service_id)
        ->where('consultant_id',$appointment->consultant_id)
        ->first();
      
        $availableDate=DB::table('consultant_availabilitys_date')
        ->where('consultant_availability_id',$conAvai->id)
        ->where('date','>',date('Y-m-d',strtotime('+1 day')))
        ->get();

        $services=service::where('id',$appointment->service_id)->first();
        $consultant=consultant::where('id',$appointment->consultant_id)->first();
        $patient=patient::where('id',$appointment->patient_id)->get();
        
        $data=array(
            'title'=>'Appointment',
            'page'=>'appintment'
        );
        return view('appointmentConfirm',compact('appointment','services','consultant','patient','availableDate'))->with($data);
    }

    public function finishAppointment(Request $request){
        

        $appointment=appointment::find($request->id);

        $serialNo=appointment::where('service_id',$appointment->service_id)
        ->where('consultant_id',$appointment->consultant_id)
        ->where('appointmant_date',$request->date)
        ->orderBy('id', 'desc')
        ->limit(1)
        ->first();
        
        if($serialNo){
            $serial=$serialNo->serial_no + 1;
        }else{
            $serial=1;
        }        
        $appointment->appointmant_date=$request->date;
        $appointment->serial_no=$serial;      
        
        $appointment->status=2;
        $appointment->save();
        session()->flash("success","Booking Successfull.");
        return redirect(route('appointment'));
    }
}
