<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class SelectController extends Controller
{
    public function index()
    {
        $category_model = new Category;
        $categories = $category_model->getCategories();
        return view("select.index",compact('categories'));
    }
}
