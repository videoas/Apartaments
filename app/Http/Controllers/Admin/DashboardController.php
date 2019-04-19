<?php

namespace App\Http\Controllers\Admin;
use App\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'categories' => Category::LastCategories(6),
            // 'adverts' => Advert::LastArticles(6),
            'count_categories' => Category::count(),
            // 'count_articles' => Article::count(),
        
        ]);
    }
}

