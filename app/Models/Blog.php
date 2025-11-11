<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'blog_category_id', 'title', 'slug', 'excerpt', 'content', 'featured_image', 'is_published', 'published_at'];

    protected $casts = ['is_published' => 'boolean', 'published_at' => 'datetime'];

    public function user() { return $this->belongsTo(User::class); }
    public function category() { return $this->belongsTo(BlogCategory::class, 'blog_category_id'); }
    public function tags() { return $this->morphToMany(Tag::class, 'taggable'); }

}
