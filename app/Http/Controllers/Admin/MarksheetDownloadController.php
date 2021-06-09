<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Semester;

use App\User;

class MarksheetDownloadController extends Controller
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

    public function getmarksheetView(){

       $semester= Semester::orderBy('id','desc')->get();

       $student= User::orderBy('id','desc')->where('status',1)->get();

       return view('admin.marksheet.download.marksheet_download_view',compact('semester','student'))->with(['title'=>'Student mark Sheet','page'=>'marksheetview']);
    }

    public function downloadmarksheetView(Request $request){
        
    }

}
