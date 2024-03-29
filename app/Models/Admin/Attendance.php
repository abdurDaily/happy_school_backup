<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    
    public function attendanceStore(){
        return $this->hasMany(AttendanceStore::class);
    }
    
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}