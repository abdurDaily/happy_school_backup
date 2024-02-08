<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Aboutgallery;
use App\Models\Admin\Admin;
use App\Models\Admin\CourseResource;

class CourseController extends Controller
{
    //COURSE-INDEX.
    public function index(){
        $getAllData = CourseResource::with('Subject')->latest()->simplePaginate(8);
        return view('frontend.cources.index',compact('getAllData'));
    }


    //COURSE SEARCH....
    public  function courseSearch(Request $request){
        $search = $request->course_search;
        $getAllData = CourseResource::
                whereHas('Subject', function($query) use($search){
                      $query->where('subject_name', 'LIKE', '%' .$search. '%');
                })->orWhere('video_title','LIKE','%' .$search. '%')->get();

        return view('frontend.cources.searchCourch', compact('getAllData'));
    }


    //ABOUT INDEX
    public function aboutIndex(){
        $aboutData = Aboutgallery::where('status',1)->first();
        return view('frontend.about.index', compact('aboutData'));
    } 


    // TEACHERS INDEX
    public function teachersIndex(){
        $teachersData = Admin::get();
        // dd($teachersData);
        return view('frontend.teachers.index', compact('teachersData'));
    }




}
