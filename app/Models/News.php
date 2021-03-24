<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "news";

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image',
        'comment'
    ];

    public function subCategories()
    {
        return $this->belongsToMany(SubCategory::class, 'news_sub_categories', 'news_id', 'sub_category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
