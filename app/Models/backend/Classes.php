<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_name',
        'class_number',
        'class_teacher_id',
        'class_start',
        'class_end',
        'status',
    ];

    public function teacherName()
    {
        return $this->belongsTo('App\Models\backend\Teacher', 'class_teacher_id');
    }

}

