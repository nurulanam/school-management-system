<?php

namespace App\Models\backend;

use App\Models\backend\Country;
use App\Models\backend\Position;
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
        return $this->belongsTo(Position::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
