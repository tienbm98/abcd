<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "sub_categories";

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_sub_categories', 'sub_category_id', 'news_id');
    }
}
