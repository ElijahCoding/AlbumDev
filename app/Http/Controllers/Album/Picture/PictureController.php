<?php

namespace App\Http\Controllers\Album\Picture;

use App\Models\Album\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    protected $allowedImageExtensions = ['gif', 'jpg', 'jpeg', 'png', 'flv', 'pjpeg'];

    public function store(Album $album, Request $request)
    {
        // $album->pictures()->create([]);
    }
}
