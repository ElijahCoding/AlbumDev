<?php

namespace App\Http\Controllers\Album;

use App\Models\Album\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::get();

        return view('album.index');
    }

    public function store(Request $request)
    {
        auth()->user()->albums()->create($request->all());
    }
}
