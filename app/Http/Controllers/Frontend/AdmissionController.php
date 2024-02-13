<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Frontend\Admission;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class AdmissionController extends Controller
{
    //CREATE ADMISSION 
    public function CreateAdmission() {
        return view('frontend.admission.createAdmission');
    }


    // STORE AND UPDATE ADMISSION 
    public function StoreAndUpdateAdmission(Request $request, $id=null){


       

        

        $request->validate([
           'std_name' => "required",
           'father_name' => "required",
           'mother_name' => "required",
           'contact_no' => "required",
           'std_id' => "required",
           'email' => "required",
        ]);

        if($request->routeIs('frontend.store.admission')){
            $request->validate([
                'std_img' => 'required|mimes:png,jpg,jpeg,webp',
            ]);
        }
        


        if ($request->hasFile('std_img')) {
            $extension = $request->std_img->extension();
            $uniqName = $request->std_img->getClientOriginalName() . "-" . uniqid() . "." . $extension;
            $path = $request->std_img->storeAs('Admission', $uniqName, 'public');
        }



        $admissionData = Admission::findOrNew($id);
        $admissionData->std_name = $request->std_name ?? $admissionData->std_name;
        $admissionData->father_name = $request->father_name ?? $admissionData->father_name;
        $admissionData->mother_name = $request->mother_name ?? $admissionData->mother_name;
        $admissionData->contact_no = $request->contact_no ??  $admissionData->contact_no;
        $admissionData->std_id = $request->std_id ??  $admissionData->std_id;
        $admissionData->email = $request->email ?? $admissionData->email;
            if ($request->hasFile('std_img')) {
                $admissionData->std_img = env('APP_URL') . 'storage/' . $path;;
            }
        $admissionData->save();
        
        Alert::success('Success Title', 'Success Message');
        return redirect()->route('frontend.frontend.index');
    }
}
