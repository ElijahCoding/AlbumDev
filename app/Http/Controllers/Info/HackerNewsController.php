<?php

namespace App\Http\Controllers\Info;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HackerNewsController extends Controller
{
    public function index()
    {
        return view('info.HackerNews.index');
    }
}
