<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\grading;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradingController extends Controller
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
        $gradings=grading::paginate(10);
        return view('admin.grading.index',compact('gradings'))->with('title','Grading List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $gradings=grading::paginate(10);
        return view('admin.grading.index',compact('gradings'))->with('title','Grading List');
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
            'maxScore'=>'required',
        ]);
        
        $grade=new grading;
        $grade->maxScore=$request->maxScore;
        $grade->gradePoint=$request->gradePoint;
        $grade->letterGrade=$request->letterGrade;
        $grade->piority=$request->piority;
        $grade->status=$request->status;
        $grade->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('grading.index'));
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
        $grad=grading::find($id);
        $gradings=grading::paginate(10);
        return view('admin.grading.index',compact('gradings','grad'))->with('title','Grading List');
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
            'maxScore'=>'required',
        ]);
        
        $grade=grading::find($id);
        $grade->maxScore=$request->maxScore;
        $grade->gradePoint=$request->gradePoint;
        $grade->letterGrade=$request->letterGrade;
        $grade->piority=$request->piority;
        $grade->status=$request->status;
        $grade->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('grading.index'));
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
