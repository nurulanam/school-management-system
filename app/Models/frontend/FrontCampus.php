<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontCampus extends Model
{
    use HasFactory;
    protected $fillable = [
        'bg_image',
        'title',
        'campus_description',
        'button_text',
        'button_link',
    ];
}
