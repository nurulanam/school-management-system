<?php

namespace App\Models\backend;

use App\Models\backend\Classes;
use App\Models\backend\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'subject_name',
        'teacher_id',
        'book_name',
        'status',
    ];

    public function className(){
        return $this->belongsTo(Classes::class, 'class_id');
    }
    public function teacherName(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
