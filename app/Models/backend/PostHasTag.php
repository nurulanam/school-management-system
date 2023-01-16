<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostHasTag extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'tag_id',
    ];
}
