<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
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
            array_push($popularCourses, $courses[$i]);
        }
        return view('elearning.index', ['data' => $data, 'courses' => $popularCourses]);
    }
}
