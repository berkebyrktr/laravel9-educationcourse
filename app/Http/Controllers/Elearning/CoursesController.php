<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index($id){
        $data = Category::all();
        return view('elearning.courses.index', ['id'=> $id, 'data' => $data]);
    }
}
