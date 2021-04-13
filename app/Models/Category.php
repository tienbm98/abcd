<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "categories";

    protected $fillable = ['name'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'sub_category_id');
    }

    public static function getAllCategories()
    {
        return Category::all();
    }

    public static function addNewCategory($input)
    {
        try {
            Category::create($input);

            return true;
        } catch (Exception $exception) {
            Log::error($exception->getMessage());

            return false;
        };
    }

    public static function getCategoryById($id)
    {
        return Category::findOrFail($id);
    }

    public static function updateCategoryById($input)
    {
        try {
            $category = Category::findOrFail($input['category_id']);
            $category->update($input);

            return true;
        } catch (Exception $exception) {
            Log::error($exception->getMessage());

            return false;
        }
    }

    public static function deleteCategoryById($id)
    {
        return Category::findOrFail($id);
    }
}
