<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Category;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::where('status', 2)->latest('id')->paginate(8);

        return view('reports.index', compact('reports'));
    }

    public function show(Report $report)
    {

        $similares = Report::where('category_id', $report->category_id)
            ->where('status', 2)
            ->where('id', '!=', $report->id)
            ->latest('id')
            ->take(4)
            ->get();

        return view('reports.show', compact('report', 'similares'));
    }

    public function category(Category $category)
    {
        $reports = Report::where('category_id', $category->id)
            ->where('status', 2)
            ->latest('id')
            ->paginate(6);
        return view('reports.category', compact('reports', 'category'));
    }

    /* public function tag(Tag $tag)
    {
        $posts = $tag->posts()
            ->where('status', 2)
            ->latest('id')
            ->paginate(6);
        return view('posts.tag', compact('posts', 'tag'));
    } */
}
