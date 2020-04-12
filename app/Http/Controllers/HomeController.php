<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Post;
use App\Subscription;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoryCount = Category::all()->count();
        $postCount = Post::all()->count();
        $usersCount = User::all()->count();
        $subscriptionsCount = Subscription::all()->count();
        return view('home',array(
            'totalcategorias' => $categoryCount,
            'totalposts' => $postCount,
            'totalusers' => $usersCount,
            'totalsubscriptions' => $subscriptionsCount
        ));
    }
}
