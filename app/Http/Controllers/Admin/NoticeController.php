<?php

namespace App\Http\Controllers\Admin;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\admin\notice;

class NoticeController extends Controller
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
        $notices=notice::paginate(10);
        return view('admin.notice.view',compact('notices'))->with('title','Notice List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create')->with('title','Create New Notice');
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
            'title'=>'required',
            'status'=>'required'
        ]);
        $image_name=null;
        if($request->hasFile('image')){
        $image_name = time().'.'.$request->image->getClientOriginalExtension();
		$request->image->move(('backend/notice'), $image_name);
        }
        $inHome=0;
        if(isset($request->inHome)){
            $inHome=1;
        }
        $inTitle=0;
        if(isset($request->inTitle)){
            $inTitle=1;
        }
        $notice=new notice;
        $notice->image=$image_name;
        $notice->title=$request->title;
        $notice->details=$request->details;
        $notice->piority=$request->piority;
        $notice->status=$request->status;
        $notice->inHome=$inHome;
        $notice->inTitle=$inTitle;
        $notice->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('notice.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice=notice::find($id);
        return view('admin.notice.show',compact('notice'))->with('title','View notice');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice=notice::find($id);
        return view('admin.notice.edit',compact('notice'))->with('title','Edit notice');
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
            'title'=>'required',
            'status'=>'required'
        ]);
        $notice=notice::find($id);
        $image_name=$notice->image;

        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();          
            $request->image->move(('backend/notice/'), $image_name);  
            if(file_exists('backend/notice/'.$notice->image)){        
                unlink('backend/notice/'.$notice->image);
            }
        }
        $inHome=1;
        if(isset($request->inHome)){
            $inHome=1;
        }
        $inTitle=1;
        if(isset($request->inTitle)){
            $inTitle=1;
        }
        $notice->image=$image_name;
        $notice->title=$request->title;
        $notice->details=$request->details;
        $notice->status=$request->status;
        $notice->inHome=$request->inHome;
        $notice->inTitle=$request->inTitle;
        $notice->piority=$request->piority;
        $notice->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('notice.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        notice::find($id)->delete();
        return redirect()->back();
    }
}
