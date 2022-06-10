<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = Category::all();
        return view('elearning.about.index', ['data' => $data]);
    }
}
