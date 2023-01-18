<?php

namespace App\Models\backend;

use App\Models\backend\Tag;
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

    // public function postHasTags(){
    //     return $this->hasMany('App\Models\backend\PostHasTag');
    // }
    public function postHasTags(){
        return $this->belongsToMany(Tag::class, 'post_has_tags', 'post_id', 'tag_id');
    }
}
