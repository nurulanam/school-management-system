<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'teacher_avater',
        'name',
        'date_of_birth',
        'phone_number',
        'email',
        'blood_group',
        'qualification',
        'gender',
        'street_address',
        'city_name',
        'country_id',
        'pin_code',
        'joining_date',
        'leaving_date',
        'position',
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\backend\Country');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
