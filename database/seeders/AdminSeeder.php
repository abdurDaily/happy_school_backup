<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = "Md. Ibrahim";
        $admin->email = "abdur@gmail.com";
        $admin->password = Hash::make('password');
        $admin->employee_designation = "Assistant Professor & Chairman";
        $admin->employee_phone = "01817750772";
        $admin->employee_about = "Admin Dashboard";
        $admin->fb_link = "https://www.facebook.com/ibrahim.rupom";
        $admin->employee_image = asset('custom_img/ibrahim.png');
        $admin->save();
    }
}
