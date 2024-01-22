<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Subject;
use App\Models\Admin\Semester;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{

    //* STORE COURSE 
    public function storeCourse(Request $request){
        $request->validate([
             'course_name' => 'unique:subjects,subject_name'
        ]);

        $storeSubjectData = new Subject();
        $storeSubjectData->subject_name = Str::slug($request->course_name);
        $storeSubjectData->semester_id = $request->semester_id;
        $storeSubjectData->author = Auth::guard('admin')->user()->name;
        $storeSubjectData->save();
        Alert::toast('success!');
        return back();
        // dd($request->all());
    }


    //* LIST COURSE 
    public function listCourse(Request $request) {
        $subjectData = Subject::select('id','semester_id','subject_name')
                       ->with('semester')
                       ->latest()->simplePaginate(10);
                       
        $semesterData = Semester::select('id','semester')->get();
        // dd($subjectData[0]->semester->semester);
        return view('admin.courses.addCourse', compact('subjectData','semesterData'));
    }


    //* DELETE SUBJECT 
    public function deleteCourse($id){
        Subject::findOrFail($id)->delete();
        Alert::error('Deleted ', 'the subject!');
        return back();
    }

    //*Create Semesyter
    public function createSemesyter(Request $request){
        $request->validate([
           'add_class' => 'unique:semesters,semester',
        ]);
        $createClass = new Semester();
        $createClass->semester = $request->add_class;
        $createClass->save();
        Alert::success('successfully', 'added new class');
        return back();

    }
}
