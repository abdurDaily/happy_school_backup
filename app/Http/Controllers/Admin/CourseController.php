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
        $storeSubjectData->subject_name = str($request->course_name)->slug()->upper() ?? $storeSubjectData->subject_name ;
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
             
        return view('admin.courses.editCourse',compact('editCourseData','subjectData','semesterData'));
    }


    //* LIST COURSE 
    public function listCourse(Request $request) {
        $subjectData = Subject::select('id','semester_id','subject_name')
                       ->with('semester')
                       ->latest()->simplePaginate(5);
                       
        $semesterData = Semester::select('id','semester')->get();
        return view('admin.courses.addCourse', compact('subjectData','semesterData'));
    }


    //* DELETE SUBJECT 
    public function deleteCourse($id){
        Subject::findOrFail($id)->delete();
        Alert::error('Deleted ', 'the subject!');
        if($id){
            return redirect()->route('admin.list.course');
        }
    }


    //*Create Semester
    public function createSemester(Request $request){
        $request->validate([
           'add_class' => 'unique:semesters,semester',
        ]);
        $createClass = new Semester();
        $createClass->semester = $request->add_class;
        $createClass->save();
        Alert::success('successfully', 'added new class');
        return back();

    }



    //* CREATE CLASS
    public function createClass(){
        $classData = Semester::select('id','semester')->latest()->simplePaginate(5);
        return view('admin.courses.addClass',compact('classData'));
    }


    //* STORE AND UPDATE 
    public function storeUpdateClass(Request $request, $id = null){

        $request->validate([
            'class_name' => "required|unique:semesters,semester",
        ]);

      $classData = Semester::findOrNew($id);
      $classData->semester = str($request->class_name)->slug()->upper() ?? $classData->semester;
      $classData->save();
      Alert::success('Success!');
      return redirect()->route('admin.create.class');
    }

    //* EDIT CLASS 
    public function editClass($id){
        $classEditdata = Semester::findOrFail($id);
        $classData = Semester::select('id','semester')->simplePaginate(5);
        return view('admin.courses.editClass', compact('classEditdata','classData'));
    }


    //* DELETE CLASS 
    public function deleteClass($id){
        Semester::findOrFail($id)->delete();
        Alert::error('Deleted!', 'your all relevent record will be deleted.');
        if($id){
            return redirect()->route('admin.create.class');
        }
    }


    //** COURSE LECTURE 
    public function addLecture() {
       return view('admin.courses.courseLecture');
    }
}
