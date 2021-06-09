<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index(){

		$quizzes=DB::table('quizzes')->get()->count();
		$courses=DB::table('courses')->get()->count();
		$notices=DB::table('notices')->get()->count();
		$faculties=DB::table('faculties')->get()->count();
		$data=array(
			'quizzes'=>$quizzes,
			'courses'=>$courses,
			'notices'=>$notices,
			'faculties'=>$faculties
		);

		return view("admin/home",compact('data'))->with('page','home');
	}
}
