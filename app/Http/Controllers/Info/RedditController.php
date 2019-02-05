<?php

namespace App\Http\Controllers\Info;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedditController extends Controller
{
    public function index()
    {
        return view('info.Reddit.index');
    }
}
