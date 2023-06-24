<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    public function index(){
        return view('dashboard.posts.index', [
            'title' => 'Dashboard'
        ]);
    }
}
