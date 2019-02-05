<?php

namespace App\Http\Controllers\Album;

use Storage;
use App\Models\Album\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index()
    {
        return view('album.index', [
            'albums' => Album::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        return auth()->user()->albums()->create($request->all());
    }

    public function destroy(Album $album)
    {
        $album->delete();
    }
}
