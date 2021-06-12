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
    public function index_post()
    {
        return view('posts.index');
    }
    public function index_post2()
    {
        return view('posts.index2');
    }
    public function show_post1()
    {
        return view('posts.show');
    }
    public function show_post2()
    {
        return view('posts.show2');
    }
    public function show_post3()
    {
        return view('posts.show3');
    }

    public function show_post4()
    {
        return view('posts.show4');
    }

    public function index_interview()
    {
        return view('interviews.index');
    }
    public function show_interview1()
    {
        return view('interviews.show');
    }
    public function show_interview2()
    {
        return view('interviews.show2');
    }
    public function show_interview3()
    {
        return view('interviews.show3');
    }
    public function show_interview4()
    {
        return view('interviews.show4');
    }
    public function show_interview5()
    {
        return view('interviews.show5');
    }



    public function index_podcast()
    {
        return view('podcasts.index');
    }
    public function show_podcast1()
    {
        return view('podcasts.show');
    }
    public function show_podcast2()
    {
        return view('podcasts.show2');
    }
    public function show_podcast3()
    {
        return view('podcasts.show3');
    }


    public function index_about()
    {
        return view('abouts.index');
    }

    public function index_report()
    {
        return view('reports.index');
    }
}
