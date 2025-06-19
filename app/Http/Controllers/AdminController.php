<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $services = Service::all();
        $categories = Category::all();

        return view('panel.admin.index', compact('services', 'categories'));
    }
}
