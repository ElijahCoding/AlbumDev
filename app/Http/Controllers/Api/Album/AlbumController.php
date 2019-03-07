<?php

namespace App\Http\Controllers\Api\Album;

use App\Models\Album\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index()
    {
        return auth()->user()->albums()->orderBy('created_at', 'desc')->get();
    }

    public function show(Album $album)
    {
        return $album;
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
