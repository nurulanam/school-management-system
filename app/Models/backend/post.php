<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_name',
        'post_description',
        'post_banner',
        'created_by',
        'status',
    ];

    public function postHasTags(){
        return $this->hasMany('App\Models\backend\PostHasTag');
    }
    // public function tagName(){
    //     return $this->hasMany('App\Models\backend\Tag');
    // }
}
