<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\module;
use App\Model\admin\course;
use App\Model\admin\group;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
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
        $modules=module::paginate(10);
        return view('admin.module.view',compact('modules'))->with(['title'=>'Module List','page'=>'module']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups=group::where('status',1)->get();
        return view('admin.module.create',compact('groups'))->with(['title'=>'Create New Module','page'=>'newModule']);
    }


    public function getCourse($id){
         $groups=course::where('group_id',$id)->get();
         return json_encode($groups);
        
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
            'module_name'=>'required',
            'module_code'=>'required',
            'group_id'=>'required'
        ]);
        $image_name=null;
        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(('backend/module'), $image_name);
        }
        
        $module=new module;
        $module->image=$image_name;
        $module->module_name=$request->module_name;
        $module->module_code=$request->module_code;
        $module->group_id=$request->group_id;
        $module->course_id=$request->course_id;
        $module->details=$request->details;
        $module->piority=$request->piority;
        $module->status=$request->status;
        $module->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('module.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module=module::find($id);
        return view('admin.module.show',compact('module'))->with('title','View Module');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groups=group::where('status',1)->get();
        $module=module::find($id);
        $courses=course::where('status',1)
        ->where('group_id',$module->group_id)
        ->get();
        return view('admin.module.edit',compact('module','courses','groups'))->with('title','Edit Module');
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
            'module_name'=>'required',
            'module_code'=>'required'
        ]);

        $module=module::find($id);

        $image_name=$module->image;
        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(('backend/module'), $image_name);
            if(file_exists('backend/module/'.$module->image)){        
                unlink('backend/module/'.$module->image);
            }   
        }
        
        $module->image=$image_name;
        $module->module_name=$request->module_name;
        $module->module_code=$request->module_code;
        $module->group_id=$request->group_id;
        $module->course_id=$request->course_id;
        $module->details=$request->details;
        $module->piority=$request->piority;
        $module->status=$request->status;
        $module->save();
        session()->flash("success","Information saved Successfully");
        return redirect(route('module.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        module::find($id)->delete();
        return redirect()->back();
    }
}
