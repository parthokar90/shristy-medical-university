<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\user\user_score;
use App\Model\user\User;
use App\Model\admin\group;

class MarksheetController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

     public function index()
    {
        $scores=user_score::paginate(10);
        $users=User::paginate(10);
        $groups=group::orderBy('piority')->get();
        return view('admin.marksheet.view',compact('scores','groups','users'))->with(['title'=>'Result List','page'=>'marksheet']);
    }

     public function quizUserResult($user_id){
        $user=User::find($user_id);
        $groups2=group::where('id',2)->orderBy('piority')->get();
        return view('admin.marksheet.userResult',compact('groups2','user'))->with(['title'=>'Result List','page'=>'marksheet']);
    }

    public function diplomaCourse($user_id){
        $user=User::find($user_id);
        $groups1=group::where('id',1)->orderBy('piority')->get();        
        return view('admin.marksheet.diplomaCourse',compact('groups1','user'))->with(['title'=>'Result List','page'=>'marksheet']);
    }

   
     public function marksheetModule($id,$user_id){
        $user=User::find($user_id);
        $course=course::find($id);
        $modules=module::where('status',1)->where('course_id',$id)->get();       
        return view('admin.marksheet.getModule',compact('modules','user','course'));
    }

}
