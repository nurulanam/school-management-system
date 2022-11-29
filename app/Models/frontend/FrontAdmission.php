<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontAdmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'top_description',
        'bg_image',
        'video_link',
        'bottom_description',
        'button_text',
        'button_link',
    ];
}
