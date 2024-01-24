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

    //* CREATE AND UPDATE COURSE 
    public function storeUpdateCourse(Request $request, $id = null){
        $request->validate([
            'course_name' => "required|unique:subjects,subject_name, $id",
             'semester_id' => 'required',
        ]);


        $storeSubjectData = Subject::findOrNew($id);
        $storeSubjectData->subject_name = Str::slug($request->course_name) ?? $storeSubjectData->subject_name ;
        $storeSubjectData->semester_id = $request->semester_id ?? $storeSubjectData->semester_id;
        $storeSubjectData->author = Auth::guard('admin')->user()->name ??  Auth::guard('admin')->user()->name;
        $storeSubjectData->save();
        Alert::toast('success!');
        return back();
    }

    //* EDIT COURSE 
    public function editCourse($id){
        $editCourseData = Subject::findOrFail($id);
        $subjectData = Subject::select('id','semester_id','subject_name')
            ->with('semester')
            ->latest()->simplePaginate(5);
        $semesterData = Semester::select('id','semester')->get();
        // dd($semesterData);

                       
        return view('admin.courses.editCourse',compact('editCourseData','subjectData','semesterData'));
    }

    //* LIST COURSE 
    public function listCourse(Request $request) {
        $subjectData = Subject::select('id','semester_id','subject_name')
                       ->with('semester')
                       ->latest()->simplePaginate(5);
                       
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
