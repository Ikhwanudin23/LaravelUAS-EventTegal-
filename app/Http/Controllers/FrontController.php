<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontpage.awal', compact('categories'));
    }

    public function detailCategories()
    {
//        $categories = Category::all();
        return view('frontpage.detailcategories');
    }
}
