<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseResource extends Model
{
    use HasFactory;
    public function Semester(){
        return $this->belongsTo(Semester::class);
    }


    public function Subject(){
        return $this->belongsTo(Subject::class);
    }


}
