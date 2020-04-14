<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{Article, Category};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard', [
            'categories' => Category::lastCategories(5),
            'articles' => Article::lastArticles(5),
            'count_categories' => Category::count(),
            'count_articles' => Article::count(),
        ]);
    }
}
