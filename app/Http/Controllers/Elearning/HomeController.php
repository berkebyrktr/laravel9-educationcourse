<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Category::all();
        $courses = Course::all();
        $popularCourses = array();
        $i = 0;
        for ($i = 0; $i < 3; $i++) {
            $course = $courses[$i];
            $course->owner = (User::find($course->user_id)->name);
            array_push($popularCourses, $course);
        }
        return view('elearning.index', ['data' => $data, 'courses' => $popularCourses]);
    }
}
