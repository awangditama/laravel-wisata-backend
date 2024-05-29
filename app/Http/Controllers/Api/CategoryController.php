<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    //index
    public function index(Request $request){
        $category = Category::orderBy('name', 'ASC')->get();
        return response()->json([
            'status' => 'success',
            'data' => $category,
        ], 200);
    }
}
