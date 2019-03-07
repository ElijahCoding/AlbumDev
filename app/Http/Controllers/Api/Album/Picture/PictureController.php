<?php

namespace App\Http\Controllers\Api\Album\Picture;

use Storage;
use App\Models\Album\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    protected $allowedImageExtensions = ['gif', 'jpg', 'jpeg', 'png', 'flv', 'pjpeg'];

    public function store(Album $album, Request $request)
    {
        if ($request->hasFile('uploadedFile')) {
            if (in_array($request->file('uploadedFile')->getClientOriginalExtension(), $this->allowedImageExtensions)) {
                Storage::putFileAs(
                    "/public/",
                    $request->file('uploadedFile'),
                    $fileName = $request->file('uploadedFile')->getClientOriginalName()
                );
                return $album->pictures()->create([
                    'name' => $fileName,
                    'file_path' => "/storage/{$album->title}/$fileName"
                ]);
            }
        }
    }
}
