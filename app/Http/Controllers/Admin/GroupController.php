<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\group;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
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
        $groups=group::paginate(2);
        return view('admin.group.view',compact('groups'))->with('title','Group List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group.create')->with('title','Create New Group');
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
            'group_name'=>'required',
        ]);
        
        $group=new group;
        $group->group_name=$request->group_name;
        $group->group_title=$request->group_title;
        $group->piority=$request->piority;
        $group->status=$request->status;
        $group->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('group.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group=group::find($id);
        return view('admin.group.show',compact('group'))->with('title','View Group');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group=group::find($id);
        return view('admin.group.edit',compact('group'))->with('title','Edit Group');
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
            'group_name'=>'required',
        ]);
        
        $group=group::find($id);
        $group->group_name=$request->group_name;
        $group->group_title=$request->group_title;
        $group->piority=$request->piority;
        $group->status=$request->status;
        $group->save();
        session()->flash("success","Information saved Successfully");
       return redirect(route('group.index'));
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
