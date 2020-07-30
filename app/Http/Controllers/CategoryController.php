<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    
    public function categories_list()
    {
        $categories = Category::all();
        
        return view('admin.categories_list', compact('categories'));
    }

    public function category_create()
    {
        return view('admin.category_create');
    }

    public function category_store(Request $request)
    {
        Category::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    public function category_edit($cate)
    {
        $category = Category::find($cate);
        return view('admin.category_edit', compact('category'));
    }

    public function category_update(Request $request, $cate)
    {
        $category = Category::find($cate);
        $category->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('categories_list');
    }

    public function category_delete($cate)
    {
        $category = Category::find($cate);
        $category->delete();

        return redirect()->back();
    }
}
