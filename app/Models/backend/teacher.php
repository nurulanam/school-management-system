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
        'position_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function position()
    {
        return $this->belongsTo('App\Models\backend\Position');
    }
    public function country()
    {
        return $this->belongsTo('App\Models\backend\Country');
    }
}
