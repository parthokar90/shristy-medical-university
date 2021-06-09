<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\admin\faculty;
use App\Model\admin\course;

use App\Model\admin\notice;

use App\Visit;


class IndexController extends Controller
{
    public function index(){
        $notices=notice::orderBy('piority','asc')
        ->where('status',1)
        ->where('inHome',1)
        ->limit(3)
        ->get();
        $courses=course::orderBy('homePiority','asc')
        ->where('status',1)
        ->where('inHome',1)
        ->limit(9)
        ->get();

        $visitorcount=Visit::count();
        

        $latests=course::orderBy('latestOrder','asc')
        ->where('status',1)
        ->where('latestCourseStatus',1)
        ->limit(9)
        ->get();

        $data=array(
            "title"=>"Home",
            "page"=>"index",
            "visitor"=>500+$visitorcount
        );
        return view('index',compact('notices','courses','latests'))->with($data);
    }

    public function about(){
        $data=array(
            "title"=>"About",
            "page"=>"about",
        );
     return view('about')->with($data);
    }
    public function fact(){
        $data=array(
            "title"=>"Fact & Figures",
            "page"=>"fact",
        );
     return view('fact')->with($data);
    }
     public function mission(){
        $data=array(
            "title"=>"Mission & Vision",
            "page"=>"mission",
        );
     return view('mission')->with($data);
    }

    public function teaching(){
        $data=array(
            "title"=>"Teaching Principles",
            "page"=>"teaching",
        );
     return view('teaching')->with($data);
    }

    public function faculty(){
        $faculties=faculty::where('status',1)->get();
        $data=array(
            "title"=>"Faculty",
            "page"=>"faculty",
        );
        return view('faculty',compact('faculties'))->with($data);
    } 
    public function doctorProfile($id){
        $faculty=faculty::find($id);
        $data=array(
            "title"=>"Faculty Profile",
            "page"=>"faculty",
        );
        return view('facultyProfile',compact('faculty'))->with($data);
    }
    
    public function contact(){
        $data=array(
            "title"=>"Contact",
            "page"=>"contact",
        );
        return view("contact")->with($data);
    }
    
    public function gallery(){
        $data=array(
            "title"=>"Gallery",
            "page"=>"gallery",
        );
        return view("gallery")->with($data);
    }
}
