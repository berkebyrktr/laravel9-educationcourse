<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return view('admin.course.index', ['data' => $data]);
    }

    public function create()
    {
        $data=Category::all();
        return view('admin.course.create', ['data' =>$data]);

    }

    public function edit(Course $course,$id)
    {
        $data = Course::find($id);
        $categories=Category::all();
        return view('admin.course.edit', ['data' => $data ,'categories'=> $categories]);
       
    }

    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $data = new Course();
        $data->title = $request->title;
        $data->category_id = $request->category;
        $data->user_id = $userId;
        $data->description = $request->description;
        $data->video = $request->video;
        $data->time = $request->time;
        $data->price = $request->price;
        $data->status = $request->status;
      

        $data->save();
        return redirect('admin/course');
        
    }
    
    public function update(Request $request, Course $course, $id)
    {
        $data = Course::find($id);

        $data->title = $request->title;
        $data->category_id = $request->category;
        $data->description = $request->description;
        $data->video = $request->video;
        $data->time = $request->time;
        $data->price = $request->price;
        $data->status = $request->status;

        $data->save();
        return redirect('admin/course');
      
     
    }

    public function show(Course $Course, $id)
    {
        $data = Course::find($id);
        return view('admin/course/show', ['data' => $data]);
    }

    public function destroy(Course $course,$id)
    {

        $data = Course::find($id);
        $data->delete();
        
        return redirect('admin/course');
    }
    
}
