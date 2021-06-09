<?php

namespace App\Http\Controllers\Admin;


use App\Model\user\user_score;
use App\Model\admin\group;
use App\Model\admin\user;
use App\Model\admin\course;
use App\Model\admin\quiz;
use App\Model\admin\module;

use Session;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultController extends Controller
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
        $scores=user_score::paginate(10);
        $users=user::paginate(10);
        $groups=group::orderBy('piority')->get();
        return view('admin.result.view',compact('scores','groups','users'))->with(['title'=>'Result List','page'=>'result']);
    }

    public function quizUserResult($user_id){

        $user=user::find($user_id);
        $groups=group::orderBy('piority')->get();
        return view('admin.result.userResult',compact('groups','user'))->with(['title'=>'Result List','page'=>'result']);
    }


    public function QuizModuleByCourseId($id,$user_id){
        $user=user::find($user_id);
        $course=course::find($id);
        $modules=module::where('status',1)->where('course_id',$id)->get();       
        return view('admin.result.getModule',compact('modules','user','course'));
    }
    public function quizList($id,$user_id){
        $user=user::find($user_id);        
        $module=module::find($id);     
        $quizzes=quiz::where('module_id',$id)->get();       
        return view('admin.result.getQuiz',compact('quizzes','user','module'));
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
