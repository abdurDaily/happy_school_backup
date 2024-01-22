<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course\Course;
use App\Models\Teacher\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            // FacultystaffSeeder::class,
            NoticeSeeder::class,
            NewseventSeeder::class,
            ContactSeeder::class,
            RoutineSeeder::class,
            AboutSeeder::class,
            ImageSeeder::class,
            VideoSeeder::class,
            RoleSeeser::class,
            PermissionSeeder::class,
            AssignRolePermissionSeeder::class,
            AboutgallerySeeder::class,
            CategorySeeder::class,
            AdmissionSeeder::class,  //*FrontEnd 
            AddBatchNumberSeeder::class,
            AdmitStudentsSeeder::class,
            SemesterSeeder::class,
            SubjectSeeder::class,
        ]);
    }
}
