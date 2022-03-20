<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function index($id){
        $data = Category::all();
        $course = Course::where('category_id', $id)->get();
        return view('elearning.courses.index', ['id'=> $id, 'data' => $data, 'courses' => $course]);
    }

    public function user_courses(){
        $userId = Auth::user()->id;
        $data = Category::all();
        $course = Course::where('user_id', $userId)->get();
        return view('elearning.user_courses.index', ['data' => $data, 'courses' => $course]);
    }
}
