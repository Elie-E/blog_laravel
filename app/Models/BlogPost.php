<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['key_post', 'lng', 'title', 'image', 'content', 'enabled', 'published_at'];

    /**
     * The category(ies) where the post belong
     */
    public function categories()
    {
        return $this->belongsToMany(BlogCat::class, 'blog_post_cat', 'post_id', 'cat_id');
    }
}
