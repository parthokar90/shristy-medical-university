<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;

use App\Model\admin\module;
use App\Model\admin\quiz;
use App\Model\admin\exam_session;

class QuizController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes=quiz::paginate(10);
        return view('admin.quiz.view',compact('quizzes'))->with(['title'=>'Quiz List','page'=>'quiz']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules=module::where('status',1)->get();
        $exam_sessions=exam_session::where('status',1)->get();
        return view('admin.quiz.create',compact('modules','exam_sessions'))->with(['title'=>'Save New Quiz','page'=>'newquiz']);
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
            'quiz_title'=>'required',
            'total_quiz'=>'required',
            'correct_mark'=>'required',
            'wrong_mark'=>'required',
            'need_to_answer'=>'required',
        ]);
        
        $quiz=new quiz;
        $quiz->quiz_title=$request->quiz_title;
        $quiz->module_id=$request->module_id;
        $quiz->examsess_id=$request->examsess_id;
        $quiz->total_quiz=$request->total_quiz;
        $quiz->need_to_answer=$request->need_to_answer;
        $quiz->correct_mark=$request->correct_mark;
        $quiz->wrong_mark=$request->wrong_mark;
        $quiz->total_time=$request->total_time;
        $quiz->status=$request->status;
        $quiz->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('quiz.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz=quiz::find($id);
        return view('admin.quiz.show',compact('quiz'))->with(['title'=>'View quiz','page'=>'quiz']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz=quiz::find($id);
        $modules=module::where('status',1)->get();
        $exam_sessions=exam_session::where('status',1)->get();
        return view('admin.quiz.edit',compact('quiz','modules','exam_sessions'))->with(['title'=>'Edit quiz','page'=>'quiz']);
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
            'quiz_title'=>'required',
            'total_quiz'=>'required',
            'correct_mark'=>'required',
            'wrong_mark'=>'required'
        ]);
        
        $quiz=quiz::find($id);
        $quiz->quiz_title=$request->quiz_title;
        $quiz->module_id=$request->module_id;
        $quiz->examsess_id=$request->examsess_id;
        $quiz->total_quiz=$request->total_quiz;
        $quiz->need_to_answer=$request->need_to_answer;
        $quiz->correct_mark=$request->correct_mark;
        $quiz->wrong_mark=$request->wrong_mark;
        $quiz->total_time=$request->total_time;
        $quiz->status=$request->status;
        $quiz->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('quiz.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        quiz::find($id)->delete();
        return redirect()->back();
    }
}
