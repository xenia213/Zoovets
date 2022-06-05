<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Csv;

class HomeController extends Controller
{
    public function index(){ 

        $posts_count = Post::all() -> count();
        $categories_count = Category::all()->count();
        $users_count = User::all()->count();
        $csv_count = Csv::all()->count();


        return view('admin.home.index', [
            'post_count' => $posts_count,
            'categories_count' => $categories_count,
            'users_count' => $users_count,
            'csv_count' => $csv_count,

        ]);
    }

    public function all_user(){

        $all_user = User::role('user')->get();

        return view('admin.csv.all_user', [
            'all_user' => $all_user
        ]);
    }

    
}

