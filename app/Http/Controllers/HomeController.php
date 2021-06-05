<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::where('status', 2)->latest('id')->paginate(4);
        $reports = Report::where('status', 2)->latest('id')->paginate(4);

        return view('home.index', compact('posts', 'reports'));
    }
}
