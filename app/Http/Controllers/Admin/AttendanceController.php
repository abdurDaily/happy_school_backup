<?php


namespace App\Http\Controllers\Admin;

use Dompdf\Dompdf;
use Illuminate\Bus\Batch;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Subject;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Admin\Attendance;
use App\Models\Admin\BatchNumber;
use App\Models\Admin\AdmitStudent;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\Admin\AttendanceStore;
use App\Models\Admin\Semester;
use App\Models\Frontend\Admission;
use Illuminate\Validation\Rules\Exists;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    //* ADD NEW BATCH 
    public function addNewBatch()
    {
        $batchNumber = BatchNumber::select('id', 'batch_no')->latest()->get();
        return view('Admin.Attendance.addNewBatch', compact('batchNumber'));
    }


    //*EDIT BATH NAME 
    public function editBathNumber($id)
    {
        $updateData = BatchNumber::findOrFail($id);
        $batchNumber = BatchNumber::select('id', 'batch_no')->latest()->get();
        return view('admin.Attendance.editBatch', compact('updateData', 'batchNumber'));
    }


    //* STORE AND UPDATE 
    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'batch_no' => "required|unique:batch_numbers,batch_no,$id",
        ]);

        if (BatchNumber::where('batch_no', Str::slug($request->batch_no))->exists()) {
            return redirect()->route('add.new.batch')->withErrors(['batch_no' => 'this batch already tacken']);
        }
        $batchNo = BatchNumber::findOrNew($id);
        $batchNo->batch_no = str($request->batch_no)->slug()->upper();
        $batchNo->save();
        Alert::success('successfully', 'new batch inserted');
        return back();
    }


    // * DELETE BATCH 
    public function deleteBatch($id)
    {
        BatchNumber::findOrFail($id)->delete();
        Alert::toast('deleted!', 'error');
        return redirect()->route('add.new.batch');
    }



    //* ADMIT STUDENTS 
    public function admitStudent()
    {
        $batchNo = BatchNumber::all();
        $allRegistedStd = Admission::select('id','std_name','std_id')->get();
        return view('Admin.Attendance.AdmitStudents', compact('batchNo','allRegistedStd'));
    }

    //* ADMIT STUDENT IN DATABASE 
    public function admitStudentDatabase(Request $request)
    {
        $request->validate([
            'std_name' => 'required',
            'std_id' => 'required|unique:admit_students,std_id',
            'batch_no' => 'required',
        ]);
        $admitStudent = new AdmitStudent();
        $admitStudent->std_name = str($request->std_name)->upper();
        $admitStudent->std_id = str($request->std_id)->slug()->upper();
        $admitStudent->batch_number = str($request->batch_no)->slug()->upper();
        $admitStudent->save();
        Alert::success('Success!');
        return redirect()->route('admited.student');
    }

    //* PRESENT STUDENTS 
    public function presentStudents()
    {
        $result = BatchNumber::all();
        $subjectId = Subject::all();
        return view('Admin.Attendance.present', compact('result', 'subjectId'));
    }


    public function attendanceRecordCheck(Request $request)
    {
        $subjectId = Subject::all();
        $batchId = BatchNumber::all();
        $query = Attendance::query();

        if ($request->subject_id) {
            $query->where('subject_id', $request->subject_id);
        }
        if ($request->date) {
            $query->where('date', $request->date);
        }
        if ($request->batch_id) {
            $query->where('batch_number_id', $request->batch_id);
        }

        $students = AdmitStudent::where('batch_number', $request->batch_id)->get();
        $atteances = $query->with('attendanceStore')->first();
        $attendedStudetID = $atteances ? $atteances->attendanceStore->pluck('admit_student_id')->toArray() : null;
        return view('Admin.Attendance.record', compact('atteances', 'subjectId', 'batchId', 'students', 'attendedStudetID'));
       
    }

    public function checkPresent(Request $request)
    {
        $result = BatchNumber::all();
        $subjectId = Subject::all();
        $studentInfo = AdmitStudent::where('batch_number', $request->batch_id)->get();
        return view('Admin.Attendance.present', compact('studentInfo', 'result', 'subjectId'));
    }


    public function submitAttendance(Request $request)
    {

        $test = Attendance::where('batch_number_id', $request->subject_id)->where('date', $request->date)->exists();
        if ($test) {
            return back()->withErrors(['hasAttendance'=> 'This attendance has already tacken!']);
            exit();
        }


        $AttendanceRecord = new Attendance();
        $AttendanceRecord->batch_number_id = $request->check_id;
        $AttendanceRecord->date = $request->date;
        $AttendanceRecord->subject_id = $request->subject_id;
        $AttendanceRecord->save();

        foreach ($request->isPresent as $stdId) {
            $allRecords = new AttendanceStore();
            $allRecords->attendance_id = $AttendanceRecord->id;
            $allRecords->admit_student_id  = $stdId;
            $allRecords->save();
        }
        
        Alert::success('success');
        return back();
    }

    public function attendanceRecord(Request $request)
    {

        $subjectId = Subject::all();
        $batchId = BatchNumber::all();
        $query = Attendance::query();

        if ($request->subject_id) {
            $query->where('subject_id', $request->subject_id);
        }
        if ($request->date) {
            $query->where('date', $request->date);
        }
        if ($request->batch_id) {
            $query->where('batch_number_id', $request->batch_id);
        }

        $students = AdmitStudent::where('batch_number', $request->batch_id)->get();
        $atteances = $query->with('attendanceStore')->first();
        $attendedStudetID = $atteances->attendanceStore->pluck('admit_student_id')->toArray();
        return view('Admin.Attendance.record', compact('subjectId', 'batchId', 'students', 'attendedStudetID'));
        
    }



    /**
     * ALL-ATTENDANCE
     */
    public function allAttendanceRecord(Request $request)
    {

        $batchId = BatchNumber::all();
        $subjectId = Subject::all();

        if ($request->batch_id && $request->subject_id) {
            $batchWithStudent = BatchNumber::with(["admitStd" => function ($q) use ($request) {
                $q->withCount(['myAttendence' => function ($query) use ($request) {
                    $query->whereHas("attendance", function ($query2) use ($request) {
                        $query2->where('subject_id', $request->subject_id);
                    });
                }]);
            }])->find($request->batch_id);

            $students = $batchWithStudent->admitStd;
            // dd($students);
            $totalAttendence = Attendance::where('subject_id', $request->subject_id)->count();

            
            // dd($students);
            return view('Admin.Attendance.allRecord', compact('students', 'totalAttendence', 'subjectId', 'batchId'));
        }
        return view('Admin.Attendance.allRecord', compact('subjectId', 'batchId'));
        
    }


    /**ATTENDANCE PDF  */
    public function attendancePdf()
    {
        $batchId = BatchNumber::all();
        $subjectId = Subject::all();
        return view('Admin.Attendance.attendancePdf', compact('batchId', 'subjectId'));
    }

    public function attendancePdfData(Request $request)
    {
        $batchId = BatchNumber::all();
        $subjectId = Subject::all();


        if ($request->batch_id && $request->subject_id) {
            $batchWithStudent = BatchNumber::with(["admitStd" => function ($q) use ($request) {
                $q->withCount(['myAttendence' => function ($query) use ($request) {
                    $query->whereHas("attendance", function ($query2) use ($request) {
                        $query2->where('subject_id', $request->subject_id);
                    });
                }]);
            }])->find($request->batch_id);

            $students = $batchWithStudent->admitStd;
            $totalAttendence = Attendance::where('subject_id', $request->subject_id)->count();
            $SubjectName = Subject::where('id', $request->subject_id)->first();


            $pdf = Pdf::loadView('admin.Attendance.attendancePdfData', compact('students', 'totalAttendence', 'subjectId', 'batchId', 'SubjectName', 'batchWithStudent'));
            return $pdf->stream('billing-invoice.pdf');

            return PDF::loadView('admin.Attendance.attendancePdfData', compact('students', 'totalAttendence', 'subjectId', 'batchId'))->setPaper('A4')->setOrientation('portrait')->stream();
        }

        $pdf = Pdf::loadView('admin.Attendance.attendancePdfData', compact('subjectId', 'batchId'));
        return $pdf->stream('billing-invoice.pdf');
    }

    //* EDIT ATTANDANCE 
    public function editAttendance(Request $request)
    {
        $oldData = AttendanceStore::where('attendance_id', $request->attendenceId)->delete();
       


       if($request->present == null){
        return back();
       }


        foreach ($request->present as $stdId) {
            $allRecords = new AttendanceStore();
            $allRecords->attendance_id = $request->attendenceId;
            $allRecords->admit_student_id  = $stdId;
            $allRecords->save();
        }
        
        return back();
    }


    //* ADMITED STUDENTS 
    public function admitedStudents()
    {
        $allAdmitedStudent = admitStudent::with('bathNo')->latest()->simplePaginate(5);
        return view('admin.Attendance.admitedStudent', compact('allAdmitedStudent'));
    }

    //* EDIT ADMITED STUDENT
    public function editAdmitedStudents($id)
    {
        $editStudent = admitStudent::with('bathNo')->findOrFail($id);
        $allBatchs = BatchNumber::select('id', 'batch_no')->get();
        return view('admin.Attendance.editStudentInfo', compact('editStudent', 'allBatchs'));
    }

    //* UPDATE STUDENTS INFO...
    public function updateStdInfo(Request $request)
    {
        
        $request->validate([
            'std_name' => 'required',
            'std_id' => 'required|unique:admit_students,std_id,$request->hidden_id',
            'batch_number' => 'required',
        ]);

        $updateStudentInfo = admitStudent::findOrFail($request->hidden_id);
        $updateStudentInfo->std_name = $request->std_name;
        $updateStudentInfo->std_id = Str::slug($request->std_id);
        $updateStudentInfo->batch_number = $request->batch_number;
        $updateStudentInfo->save();
        Alert::success('success!');
        return redirect()->route('admited.student');


    }

    //* DELETE ADMITED STUDENT
    public function deleteStudent($id){
        admitStudent::findOrFail($id)->delete();
        Alert::warning('Deleted Successfully');
        return redirect()->route('admited.student');
    }


























    // ATTENDANCE RECORDS
    public function attendanceRecords(Request $req){
        $attendanceProvide = Attendance::where('batch_number_id', $req->batch_id)->
        where('subject_id',$req->subject_id)->
        with(['attendanceStore' => function($query){
            $query->select('id','admit_student_id','attendance_id');
        }])->get()->groupBy('date');
       
        
        $students = AdmitStudent::where('batch_number', $req->batch_id)->get();



        $batchData = BatchNumber::select('id','batch_no')->get();
        $subjectId = Subject::select('id','subject_name','semester_id')->get();
        return view('admin.Attendance.allRecordsByDate', compact('students', 'attendanceProvide','subjectId','batchData'));
    }


}
