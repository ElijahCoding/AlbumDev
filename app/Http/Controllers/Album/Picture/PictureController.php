<?php

namespace App\Http\Controllers\Album\Picture;

use Storage;
use App\Models\Album\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    // protected $allowedImageExtensions = ['gif', 'jpg', 'jpeg', 'png', 'flv', 'pjpeg'];

    public function store(Album $album, Request $request)
    {
        dd('working');
        // if ($request->hasFile('uploadedFile')) {
        //     if (in_array($request->file('uploadedFile')->getClientOriginalExtension(), $this->allowedImageExtensions)) {
        //         Storage::putFileAs(
        //             "/public/{$album->title}/",
        //             $request->file('uploadedFile'),
        //             $fileName = $request->file('uploadedFile')->getClientOriginalName()
        //         );
        //
        //         // $album->pictures()->create([
        //         //     'name' => ,
        //         //     'file_path' =>
        //         // ]);
        //     }
        // }
        // $album->pictures()->create();
    }
}
