<?php

namespace Database\Seeders;

use App\Models\Admin\CourseResource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $CourseResourcs = new CourseResource();
        $CourseResourcs->subject_id = 1;
        $CourseResourcs->video_title = "Python";
        $CourseResourcs->video_url = "https://www.youtube.com/watch?v=_uQrJ0TkZlc";
        $CourseResourcs->save();

        
        $CourseResourcs = new CourseResource();
        $CourseResourcs->subject_id = 1;
        $CourseResourcs->video_title = "C++";
        $CourseResourcs->video_url = "https://www.youtube.com/watch?v=vLnPwxZdW4Y";
        $CourseResourcs->save();


    }
}
