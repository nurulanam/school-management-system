<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
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
        'position_id',
        'status',
    ];

    public function position()
    {
        return $this->belongsTo('App\Models\backend\Position');
    }
    public function country()
    {
        return $this->belongsTo('App\Models\backend\Country');
    }
}
