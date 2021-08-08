<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany('App\Models\BlogCategory');
    }

    // public function getResumeAttribute()
    // {
    //     return \Illuminate\Support\Str::limit($this->resume, 300, '...');


    // }

    public $fillable = [
        'title', 'resume', 'text', 'slug', 'imagelink', 'author', 'category_id'
    ];
}
