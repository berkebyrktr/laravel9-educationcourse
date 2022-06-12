<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $userId = Auth::user()->id;
        $data = Category::all();
        $purchases = Purchase::where('user_id', $userId)->where('status', 1)->get();
        foreach($purchases as $item){
            $item->course = Course::find($item->course_id);
            $item->course->category = Category::find($item->course->category_id)->title;
        }
        return view('elearning.cart.index', ['data' => $data, 'purchases' => $purchases]);
    }

    public function store(Request $request, $id)
    {
        $course = Course::find($id);
        $userId = Auth::user()->id;
        $data = new Purchase();
        $data->course_id = $id;
        $data->user_id = $userId;
        $data->price = $course->price;

        $data->save();

        return redirect('/courses/'.$course->category_id);
        
    }

    public function complete(){
        $userId = Auth::user()->id;
        $purchases = Purchase::where('user_id', $userId)->where('status', 1)->get();
        foreach($purchases as $item){
            $item->status = 0;
            $item->save();
        }
        return redirect('/cart');
    }

    public function destroy(Purchase $purchase,$id)
    {

        $data = Purchase::find($id);
        $data->delete();
        
        return redirect('/cart');
    }
}
