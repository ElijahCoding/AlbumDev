<?php

namespace App\Http\Controllers\Info;

use Cache;
use Illuminate\Http\Request;
use App\Services\Reddit\Stories;
use App\Http\Controllers\Controller;

class RedditController extends Controller
{
    public function index()
    {
        $stories = Cache::remember('reddit', 10, function () {
            return json_encode((new Stories())->get(20));
        });

        return view('info.Reddit.index', [
            'stories' => json_decode($stories)
        ]);
    }
}
