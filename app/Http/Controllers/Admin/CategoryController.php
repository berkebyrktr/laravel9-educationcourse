<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('Admin.Category.index', ['data' => $data]);
    }

    public function create()
    {
        return view('Admin.Category.create');
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('Admin.Category.edit', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $data = new Category();
        $data->title = $request->title;
        $data->parent_id = 0;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->image = "";

        $data->save();
        return redirect('admin/category');
    }

    public function update(Request $request, Category $category, $id)
    {
        $data = Category::find($id);
        $data->title = $request->title;
        $data->parent_id = 0;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->image = "";

        $data->save();
        return redirect('admin/category');
    }

    public function destroy($id)
    {

        $data = Category::find($id);
        $data->delete();
        
        return redirect('admin/category');
    }
}
