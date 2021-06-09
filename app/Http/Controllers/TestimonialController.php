<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $data=array(
            "title"=>"Testimonial",
            "page"=>"testimonial",
        );
        return view('testimonial')->with($data);
    }

}
