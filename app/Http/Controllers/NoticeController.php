<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\admin\notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices=notice::orderBy('piority','asc')
        ->where('status',1)
        ->get();
        $data=array(
            'title'=>'Notice',
            'page'=>'Notices'
        );
        return view('notices',compact('notices'))->with($data);
    }


    public function singleNotice($id){
        $notice=notice::find($id);
        $previous = notice::where('id', '<', $notice->id)->max('id');    
        $next = notice::where('id', '>', $notice->id)->min('id');
        $data=array(
            'title'=>'Notice',
            'page'=>'blog',
            'previous'=>$previous,
            'next'=>$next
        );


        return view('notice',compact('notice'))->with($data);
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
