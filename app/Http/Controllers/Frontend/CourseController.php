<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //INDEX
    public function index(){
        return view('frontend.cources.index');
    }
}
