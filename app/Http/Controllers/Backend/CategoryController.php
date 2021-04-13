<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::getAllCategories();

        return view('backend.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        
        $category = Category::addNewCategory($input);

        if ($category) {
            return redirect()->route('category.index')->with(SUCCESS, 'Create success !');
        }

        return redirect()->route('category.index')->with(ERROR, 'Create failed !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::getCategoryById($id);

        return view('backend.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request)
    {
        $input = $request->all();
        // dd($input);
        $categoryUpdate = Category::updateCategoryById($input);

        if ($categoryUpdate) {
            return redirect()->route('category.index')->with(SUCCESS, 'Update success !');
        }

        return redirect()->route('category.index')->with(ERROR, 'Update failed !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryDelete = Category::deleteCategoryById($id);
        $categoryDelete->delete();

        if ($categoryDelete) {
            return redirect()->back()->with(SUCCESS, 'Delete category successfully');
        }

        return redirect()->back()->with(ERROR, 'Delete category false');

    }

    // public function searchCategory(Request $request)
    // {
    //     $input = $request->all();

    //     return Category::searchCategory($input);
    // }
}
