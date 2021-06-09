<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Model\admin\course;

use App\Model\admission;

use App\Model\Semester;

use App\User;

use App\Model\Admin\course_session;

use DB;

use Mail;



class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=array(
            'title'=>'Terms',
            'page'=>'application'
        );
        return view('admissionTerams')->with($data);
    }
    public function registration()
    {
        $semester=Semester::orderBy('id','asc')->get();

        $session=DB::table('course_session')->orderBy('id','DESC')->get();

        $data=array(
            'title'=>'Application',
            'page'=>'application'
        );
        return view('application',compact('semester','session'))->with($data);
    }

    public function registrationStore(Request $request)
    {
        
        $this->validate($request,[
            'firstName'=>'required',
            'semester_id'=>'required',
            'session_id'=>'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
        ]);


         $user=new user;
         $user->name=$request->firstName;
         $user->email=$request->email;
         $user->password=123456; 
         $user->phone=$request->phone;
         $user->gender=$request->gender;
         $user->religion=$request->religion;
         $user->session_id=$request->session_id;
         $user->status=0;
         $user->save();

         User::where('id',$user->id)->update([
            'registration_no'=>$user->id.'-'.date('Y'),
         ]);

         $admission=new admission;
         $admission->student_id=$user->id;
         $admission->semester_id=$request->semester_id;
         $admission->exam_session_id=$request->session_id;
         $admission->status=1;
         $admission->save();

         //send mail to student
        $name=$request->firstName; 
        $email=$request->email;
        $subject='Online Admission';
        Mail::send('admission_mail', ['name' => $name], function($message) use ($email, $subject) {
             $message->from('shristyultrasound7@gmail.com', 'Shristy Ultrasound');
             $message->to($email)->subject($subject);
        });

        session()->flash("success","Your admission has been completed.Please check your mail for admission confirmation");
        return back();

    }

    

    public function admissionPay($id)
    {

        $data=array(
            'title'=>'Payment',
            'page'=>'payment',
            'id'=>$id
        );
        return view('payment')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
