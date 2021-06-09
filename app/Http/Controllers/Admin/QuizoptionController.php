<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\quiz_option;
use App\Model\admin\quiz;

class QuizoptionController extends Controller
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
        //
    }

    public function questionList($id){
        $quiz=quiz::find($id);        
        $questions=quiz_option::where('quiz_id',$id)->paginate(10);
        return view('admin.quizOption.view',compact('questions','quiz'))->with('title','Question List')->with('id',$id);
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

    public function createQuestion($id){
        $quiz=array(
            'quiz_id'=>$id
        );
        $last=quiz_option::where('quiz_id',$id)->orderBy('id','desc')->limit(1)->get();   
        $quiz=quiz::find($id);

        if(count($last) > 0){
        if($last[0]->serial+1 > $quiz->total_quiz){
            session()->flash("error","Please increase Total No of Quiz");
            return redirect(route('questionList',$id));
            }
            $last=array(
                'serial'=>$last[0]->serial+1
            );
        }
        else{
            $last=array(
                'serial'=>1
            );
        }
        
        return view('admin.quizOption.create',compact('quiz'))->with('title','Question Save')->with($last);
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
            'serial'=>'required',
            'quiz_id'=>'required',
            'question'=>'required',
            'correct_ans'=>'required'
        ]);
        
        $image_name=null;
        if($request->hasFile('image')){
        $image_name = time().'.'.$request->image->getClientOriginalExtension();
		$request->image->move(('backend/quiz'), $image_name);
        }        
        $quiz_option=new quiz_option;
        $quiz_option->serial=trim($request->serial);
        $quiz_option->image=$image_name;
        $quiz_option->quiz_id=$request->quiz_id;
        $quiz_option->question=trim($request->question);
        $quiz_option->option1=trim($request->option1);
        $quiz_option->option2=trim($request->option2);
        $quiz_option->option3=trim($request->option3);
        $quiz_option->option4=trim($request->option4);
        $quiz_option->option5=trim($request->option5);
        $quiz_option->correct_ans=$request->correct_ans;
        $quiz_option->discription=$request->discription;
        $quiz_option->status=$request->status;
        $quiz_option->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('questionList',$request->quiz_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz_option=quiz_option::find($id);
        return view('admin.quizOption.show',compact('quiz_option'))->with('title','Show Quiz Option');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz_option=quiz_option::find($id);
        return view('admin.quizOption.edit',compact('quiz_option'))->with('title','Edit Quiz Option');
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
            'serial'=>'required',
            'quiz_id'=>'required',
            'question'=>'required',
            'correct_ans'=>'required'
        ]);

        $quiz_option=quiz_option::find($id);

        $image_name=$quiz_option->image;
        if($request->hasFile('image')){
        $image_name = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(('backend/quiz'), $image_name);
         if($quiz_option->image !=null){
            if(file_exists('backend/quiz/'.$quiz_option->image)){        
                unlink('backend/quiz/'.$quiz_option->image);
                }   
          }              
        }

        $quiz_option->serial=$request->serial;
        $quiz_option->image=$image_name;
        $quiz_option->quiz_id=$request->quiz_id;
        $quiz_option->question=$request->question;
        $quiz_option->option1=$request->option1;
        $quiz_option->option2=$request->option2;
        $quiz_option->option3=$request->option3;
        $quiz_option->option4=$request->option4;
        $quiz_option->option5=$request->option5;
        $quiz_option->correct_ans=$request->correct_ans;
        $quiz_option->discription=$request->discription;
        $quiz_option->status=$request->status;
        $quiz_option->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('questionList',$request->quiz_id));
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
