<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin-panel.categories.index', [
            'categories' => Category::with('products', 'category')->get(['id', 'name']) 
        ]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
