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
        'class_start',
        'class_end',
        'status',
    ];

    

}

