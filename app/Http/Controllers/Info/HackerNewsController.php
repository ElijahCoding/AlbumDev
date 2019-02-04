<?php

namespace App\Http\Controllers\Info;

use Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\HackerNews\TopStories;

class HackerNewsController extends Controller
{
    public function index()
    {
        $stories = Cache::remember('hackernews', 10, function () {
            return json_encode((new TopStories())->get(20));
        });

        return view('info.HackerNews.index', [
            'stories' => json_decode($stories)
        ]);
    }
}
