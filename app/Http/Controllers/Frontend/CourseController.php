<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\CourseResource;

class CourseController extends Controller
{
    // COURSE-INDEX
    public function index(){
        $getAllData = CourseResource::with('Subject')->latest()->simplePaginate(8);
        return view('frontend.cources.index',compact('getAllData'));
    }


    
}
