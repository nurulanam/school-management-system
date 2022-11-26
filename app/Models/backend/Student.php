<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'student_avater',
        'name',
        'date_of_birth',
        'phone_number',
        'blood_group',
        'gender',
        'street_address',
        'city_name',
        'country_id',
        'pin_code',
        'joining_date',
        'class_id',
        'roll_number'
    ];
    public function Class()
    {
        return $this->belongsTo('App\Models\backend\Classes', 'class_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
