<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use App\Models\Frontend\Admission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admissionData = new Admission();
        $admissionData->std_name = "abdur";
        $admissionData->father_name = "abc";
        $admissionData->mother_name = "abc";
        $admissionData->contact_no = "0123456789";

        $admissionData->email = "abc@gmail.com";
        $admissionData->std_id = "T-191060";
        $admissionData->std_img = asset('custom_img/about.png');
        $admissionData->save();

    }
}
