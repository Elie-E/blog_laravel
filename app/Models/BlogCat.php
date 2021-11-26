<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCat extends Model
{
    use HasFactory;

    /**
     * The post(s) that belong to this category
     */
    public function posts()
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_cat', 'cat_id', 'post_id');
    }
}
