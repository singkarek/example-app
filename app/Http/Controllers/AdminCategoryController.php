<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index(){
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }
}
