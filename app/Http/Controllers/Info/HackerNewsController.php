<?php

namespace App\Http\Controllers\Info;

use Illuminate\Http\Request;
use App\Services\HackerNews;
use App\Http\Controllers\Controller;
use App\Services\HackerNews\TopStories;

class HackerNewsController extends Controller
{
    public function index()
    {
        dd((new TopStories)->get());
        return view('info.HackerNews.index');
    }
}
