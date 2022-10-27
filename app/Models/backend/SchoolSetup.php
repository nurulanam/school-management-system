<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSetup extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_name',
        'school_tagline',
        'school_phone_number',
        'school_email',
        'school_eiin_number',
        'school_mpo_number',
        'school_avater',
        'school_description',
    ];
}
