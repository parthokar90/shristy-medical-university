<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use App\Model\Semester;

use Illuminate\Support\Facades\Hash;

use App\Model\admission;

use Illuminate\Validation\Rule;

use PDF;

use DB;

use Mail;

class UserController extends Controller
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
        $users=user::orderBy('id','DESC')->paginate(10);
        return view('admin.user.view',compact('users'))->with('title','Student List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semester=Semester::orderBy('id','asc')->get();

        $session=DB::table('course_session')->orderBy('id','DESC')->get();

        return view('admin.user.create',compact('semester','session'))->with('title','Student Create');
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
            'firstName'=>'required',
            'semester_id'=>'required',
            'session_id'=>'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'phone' => ['required'],
        ]);


         $user=new user;
         $user->name=$request->firstName;
         $user->email=$request->email;
         $user->password=Hash::make($request['password']);  
         $user->phone=$request->phone;
         $user->gender=$request->gender;
         $user->religion=$request->religion;
         $user->session_id=$request->session_id;
         $user->status=1;
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
        $password=$request->password;
        $subject='Online Admission';
        Mail::send('admission_admin_mail', ['name' => $name,'email'=>$email,'password'=>$password], function($message) use ($email, $subject) {
             $message->from('shristyultrasound7@gmail.com', 'Shristy Ultrasound');
             $message->to($email)->subject($subject);
        });

        session()->flash("success","Information saved Successfully");
        return redirect(route('user.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=user::findOrFail($id);
        return view('admin.user.show',compact('user'))->with('title','Show Student');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user=user::findOrFail($id);

        $semester=Semester::orderBy('id','asc')->get();

        $session=DB::table('course_session')->orderBy('id','DESC')->get();

        $current_session=DB::table('admissions')->where('student_id',$id)->where('admissions.status',1)
        ->leftjoin('course_session','course_session.id','=','admissions.exam_session_id')
        ->select('course_session.id','name as session_name')
        ->first();

        
        $current_semester=DB::table('admissions')->where('student_id',$id)->where('admissions.status',1)
        ->leftjoin('semesters','semesters.id','=','admissions.semester_id')
        ->select('semesters.id','semister_name')
        ->first();

        $payment_status=DB::table('admissions')->where('student_id',$id)->where('admissions.status',2)->first();

        $payment_status=DB::table('admissions')->where('student_id',$id)->where('admissions.status',2)->first();

        $student_course_count=DB::table('admissions')->where('student_id',$id)->where('admissions.status',1)
        ->leftjoin('semister_courses','semister_courses.semister_id','=','admissions.semester_id')
        ->count();

        $passed_score=$student_course_count*40;

       $score=DB::table('semister_courses')
       ->where('semister_courses.semister_id',$current_semester->id)
       ->where('user_scores.user_id',$id)
       ->join('user_scores','user_scores.course_id','=','semister_courses.course_id')
       ->sum('score');

        return view('admin.user.edit',compact('user','semester','session','current_session','current_semester','payment_status','passed_score','score'))->with('title','Edit Student');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required',Rule::unique('users')->ignore($id),
            ],
        ]);
       
        $user=user::findOrFail($id);
        if($request->password==''){
          $password=$user->password;
        }else{
          $password=Hash::make($request['password']);
        }

        if($user->registration_no==''){
           $reg_no=$id.'-'.date('Y');
        }else{
             $reg_no=$user->registration_no;
        }
        $user->name=$request->name;

        $user->email=$request->email;

        $user->password=$password;

        $user->registration_no=$reg_no;

        $user->status=$request->status;

        $user->save();

       session()->flash("success","Information saved Successfully");
       return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::findOrFail($id)->delete();
        return redirect()->back();
    }


    public function downloadMarksheet(){
        $student=user::orderBy('id','DESC')->get();
        $semester=Semester::orderBy('id','DESC')->get();
        return view('admin.marksheet.download.marksheet_download_view',compact('student','semester'));
    } 

    public function marksheetDownload(Request $request){

        //check student result 
        $count=DB::table('user_scores')->where('user_id',$request->student_id)->count();

        if($count==0){
            session()->flash("error","No Record Found");
            return redirect()->back();
        }

        if($request->semester_id==0){
           $semester=DB::table('semesters')->orderBy('order')->get();
        }else{
           $semester=DB::table('semesters')->where('id',$request->semester_id)->get();
        }

        $student=DB::table('users')->where('id',$request->student_id)->first();

        $grading=DB::table('grading_system')->get();

        $session=DB::table('course_session')->where('id',$student->session_id)->first();

        $pdf = PDF::loadView('admin.marksheet.download.marksheet_download',array('semester'=>$semester,'student'=>$student,'grading'=>$grading,'session'=>$session));
        return $pdf->download('marksheet_download.pdf'); 

    }

    public function newAdmission(Request $request,$id){
  
         $this->validate($request,[
            'semester_id'=>'required',
            'session_id'=>'required',
        ]);

        //check semester exists or not
        $count=DB::table('admissions')->where('student_id',$id)->where('semester_id',$request->semester_id)->count();

        if($count>0){
          session()->flash("error","This Semester already exists");
          return back();
        }

        $user=user::findOrFail($id);

        $user->session_id=$request->session_id;

        $user->save();

        $current_semester=DB::table('admissions')->where('student_id',$id)->where('admissions.status',1)->first();

        DB::table('admissions')->where('student_id',$id)->where('semester_id',$current_semester->semester_id)->update([
           'status' =>2
        ]);

         $admission=new admission;
         $admission->student_id=$id;
         $admission->semester_id=$request->semester_id;
         $admission->exam_session_id=$request->session_id;
         $admission->status=1;
         $admission->save();

        //send mail to student
        $userInfo=user::findOrFail($id);
        $semesterInfo=DB::table('semesters')->where('id',$request->semester_id)->first();
        $name=$userInfo->name; 
        $email=$userInfo->email;
        $semester=$semesterInfo->semister_name;
        $subject='Online Admission';
        Mail::send('admission_new_admin_mail', ['name' => $name,'semester'=>$semester], function($message) use ($email, $subject) {
             $message->from('shristyultrasound7@gmail.com', 'Shristy Ultrasound');
             $message->to($email)->subject($subject);
        });

        session()->flash("success","Admission has been completed Successfully");
        return back();

    }


}
