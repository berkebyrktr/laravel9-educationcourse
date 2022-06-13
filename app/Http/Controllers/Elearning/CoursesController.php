<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function index($id){
        $data = Category::all();
        $courses = Course::where('category_id', $id)->where('status', 1)->get();
        foreach($courses as $course){
            $course->owner = (User::find($course->user_id)->name);
        }
        return view('elearning.courses.index', ['id'=> $id, 'data' => $data, 'courses' => $courses]);
    }

    public function search(Request $request){
        $data = Category::all();
        $courses = Course::where('title', $request->search)->where('status', 1)->get();
        foreach($courses as $course){
            $course->owner = (User::find($course->user_id)->name);
        }
        return view('elearning.courses.search', ['data' => $data, 'courses' => $courses, 'query' => $request->search]);
    }

    public function user_courses(){
        $userId = Auth::user()->id;
        $data = Category::all();
        $course = Course::where('user_id', $userId)->get();
        foreach($course as $item){
            $item->category = (Category::find($item->category_id)->title);
            
        }
        return view('elearning.user_courses.index', ['data' => $data, 'courses' => $course]);
    }

    public function purchased_courses(){
        $userId = Auth::user()->id;
        $data = Category::all();
        $purchases = Purchase::where('user_id', $userId)->where('status', 0)->get();
        $courses = array();
        foreach($purchases as $item){
            $course = Course::find($item->course_id);
            $course->category = Category::find($course->category_id)->title;
            $course->owner = (User::find($item->user_id)->name);
            array_push($courses, $course);
        }
        return view('elearning.purchased_courses.index', ['data' => $data, 'courses' => $courses]);
    }

    
    public function create()
    {
        $data=Category::all();
        return view('elearning.user_courses.create', ['data' =>$data]);

    }

    public function edit(Course $course, $id)
    {
        $data = Course::find($id);
        $categories=Category::all();
        return view('elearning.user_courses.edit', ['data' => $data ,'categories'=> $categories]);
       
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
      

        $data->save();
        return redirect('/user_courses');
        
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

        $data->save();
        return redirect('/user_courses');
      
     
    }

    public function purchased_show(Course $Course, $id)
    {
        $categories=Category::all();
        $data = Course::find($id);
        return view('elearning.purchased_courses.show', ['data' => $data, 'categories' => $categories]);
    }

    public function show(Course $Course, $id)
    {
        $categories=Category::all();
        $data = Course::find($id);
        return view('elearning.user_courses.show', ['data' => $data, 'categories' => $categories]);
    }

    public function destroy(Course $course,$id)
    {

        $data = Course::find($id);
        $data->delete();
        
        return redirect('/user_courses');
    }
}
