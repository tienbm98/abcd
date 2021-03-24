<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsSubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "news_sub_categories";

    protected $fillable = [
        'news_id',
        'sub_category_id'
    ];
}
