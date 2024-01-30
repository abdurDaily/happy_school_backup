<?php

namespace App\Models\Admin;

use App\Models\Admin\Subject;
use App\Models\Admin\CourseResoure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semester extends Model
{
    use HasFactory;

    /*
      *** RELATION BETWWEN SEMESTE AND SUBJECTS 
    */

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    // COURSE RESOURCES
    public function courseResource(){
      return $this->hasMany(CourseResource::class);
    }
   
}