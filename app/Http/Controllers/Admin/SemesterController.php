<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Model\Semester;

use App\Model\admin\course;

use App\Model\SemisterCourse;

class SemesterController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $list = Semester::latest()->paginate(10);

        return view('admin.semester.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $course=course::orderBy('id','DESC')
        ->where('status',1)
        ->get();
         return view('admin.semester.create',compact('course'));
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
            'semister_name' => ['required', 'string', 'max:255'],
            'course_id' => ['required'],
        ]);

          $store = new Semester;

          $store->semister_name = $request->semister_name;

          $store->created_by = auth()->user()->id;

          $store->status = $request->status;

          $store->save();

        for($i=0;$i<count($request->course_id);$i++){

            $semester = new SemisterCourse;

            $semester->semister_id = $store->id;

            $semester->course_id = $request->course_id[$i];

            $semester->created_by = auth()->user()->id;

            $semester->save();
        }

        session()->flash("success","Information saved Successfully");
        return redirect(route('semesters.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Semester::findOrFail($id);

        return view('admin.semester.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $edit = Semester::findOrFail($id);

         $course=course::orderBy('id','DESC')
        ->where('status',1)
        ->get();

        return view('admin.semester.edit',compact('edit','course'));


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
            'semister_name' => ['required', 'string', 'max:255'],
            'course_id' => ['required'],
        ]);
          $store = Semester::findOrFail($id);

          $store->semister_name = $request->semister_name;

          $store->created_by = auth()->user()->id;

          $store->status = $request->status;

          $store->save();

          
         SemisterCourse::where('semister_id',$store->id)->delete();

         for($i=0;$i<count($request->course_id);$i++){
            
            $semester = new SemisterCourse;

            $semester->semister_id = $store->id;

            $semester->course_id = $request->course_id[$i];

            $semester->created_by = auth()->user()->id;

            $semester->save();
        }
        session()->flash("success","Information update Successfully");
        return redirect(route('semesters.index'));

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
