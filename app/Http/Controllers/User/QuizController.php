<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Support\Facades\Auth;
use App\Model\admin\module;
use App\Model\admin\quiz;

class QuizController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function quizList($id){
        $quizzes = quiz::where('status',1)
        ->where('module_id',$id)
        ->get();
        if(count($quizzes)==0){
            return redirect()->back()->with('error', 'No Quiz found');   
        }
        return view('user.quiz.quizzes',compact('quizzes'));
    }

    public function QuizModuleByCourseId($id){
        $modules=module::where('status',1)->where('course_id',$id)->get();        
       return view('user.getModule',compact('modules'));
    }

    public function QuizModuleByCourseIdStudent($id){
       $modules=module::where('status',1)->where('course_id',$id)->get();        
       return view('user.getModuleStudent',compact('modules'));
    }

    public function startQuiz($id){
        $quiz_meta = DB::table('quiz_meta')
        ->where('quiz_id',$id)
        ->where('user_id',Auth::user()->id)
        ->where('finish',0)
        ->first(); 
     
        
       if(!isset($quiz_meta)){
        $quiz = DB::table('quizzes')
        ->where('id',$id)
        ->first();
        
        $serial=1;
        $info=array(            
            "quiz_id"=>$id,
            "user_id"=>Auth::user()->id,
            "serial"=> $serial,
            "finish"=>  0,
            "need_to_answer"=>$quiz->need_to_answer,
            "answerd"=>0,
            "total_quiz"=>$quiz->total_quiz,
            "start_time"=> date('Y-m-d H:i:s'),           
        );
        DB::table('quiz_meta')->insert($info);
       }
       else{
           $serial=$quiz_meta->serial;
       }
        $quizzes = DB::table('quiz_options')
        ->where('quiz_id',$id)
        ->inRandomOrder()
        ->first();   
        
   
        return view('user.quiz.index',compact('quizzes'))->with('title','User Quiz')->with('question_no',$serial);
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

        $quiz = DB::table('quiz_options')
        ->where('id',$request->id)
        ->orderByRandom()
        ->first();

        dd($quiz);
    }

    public function saveQuiz (Request $request){
        $quiz = DB::table('quiz_options')
        ->where('id',$request->id)
        ->first(); 

        $quiz_main = DB::table('quizzes')
        ->where('id',$quiz->quiz_id)
        ->first();

        $moduleInfo=DB::table('modules')->where('id',$quiz_main->module_id)->first();       
        
        $currect_mark=$quiz_main->correct_mark;
        $wrong_mark=$quiz_main->wrong_mark;
        $score=$wrong_mark;
        $correct=0;
        if( $request->answer == $quiz->correct_ans){
            $score=$currect_mark; 
            $correct=1;
        }
        $info=array(
            "option_id"=> $request->id,
            "question"=> $quiz->question,
            "image"=>$quiz->image,
            "user_id"=>Auth::user()->id,
            "quiz_id"=>$quiz->quiz_id,
            "option1"=> $quiz->option1,
            "option2"=>  $quiz->option2,
            "option3"=>  $quiz->option3,
            "option4"=>  $quiz->option4,
            "correct_ans"=>  $quiz->correct_ans,
            "given_ans"=>  $request->answer,
            "score"=>  $score,
        );
        DB::table('quiz_answer')->insert($info);

        $finish=0;
        // get quiz meta info
        $quiz_meta = DB::table('quiz_meta')
        ->where('quiz_id',$quiz->quiz_id)
        ->where('user_id',Auth::user()->id)
        ->where('finish',0)
        ->first(); 
        if($quiz_meta->serial==$quiz_meta->need_to_answer){
            $update_info=array(
                'score'=>$quiz_meta->score+$score,
                'answerd'=>$quiz_meta->answerd+1,
                'finish'=>1,
            );
            $finish=1;
        }else{
            $update_info=array(
                'score'=>$quiz_meta->score+$score,
                'serial'=>$quiz_meta->serial+1,
                'answerd'=>$quiz_meta->answerd+1,
            );
        }
       
        $quiz_meta_update = DB::table('quiz_meta')
        ->where('id',$quiz_meta->id)
        ->update($update_info);

        // update mark
        $user_score = DB::table('user_scores')
        ->where('quiz_id',$quiz->quiz_id)
        ->where('user_id',Auth::user()->id)        
        ->first();        
        if($correct==1){
            $correct_ans=1;
            $wrong_ans=0;
        }
        else{
            $correct_ans=0;
            $wrong_ans=1; 
        }
        if($user_score==null){
            $score_item=array(
                "quiz_id"=>$quiz->quiz_id,
                "course_id"=> $moduleInfo->course_id,
                "user_id"=>Auth::user()->id,
                "totalQuestion"=> $quiz_main->total_quiz,              
                "correct_ans"=>  $correct_ans,
                "wrong_ans"=>   $wrong_ans,
                "score"=>  $score,
            );
            DB::table('user_scores')->insert($score_item);
        }
        else{
            $newScore=$user_score->score+$score;
            $update_score_info=array(
                "correct_ans"=>  $user_score->correct_ans+$correct_ans,
                "wrong_ans"=>  $user_score->wrong_ans+$wrong_ans,
                "score"=>  $newScore,
            );
            $where=array(
                "quiz_id"=>$quiz->quiz_id,
                "user_id"=>Auth::user()->id,
            );

            $quiz_meta_update =  DB::table('user_scores')
            ->where('quiz_id',$quiz->quiz_id)
            ->where('user_id',Auth::user()->id)      
            ->update($update_score_info);
        }
        // end update mark
       
        if($finish==1){
            return redirect(route('user.home'));
        }else{
            return redirect(route('user.startQuiz',$quiz->quiz_id));
        }
       
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
