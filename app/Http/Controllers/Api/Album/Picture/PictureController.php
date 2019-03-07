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
            foreach ($request->file('uploadedFile') as $file) {
                if (in_array($file->getClientOriginalExtension(), $this->allowedImageExtensions)) {
                    Storage::putFileAs(
                        "/public/{$album->title}/",
                        $file,
                        $fileName = $file->getClientOriginalName()
                    );
                    $album->pictures()->create([
                        'name' => $fileName,
                        'file_path' => "/storage/{$album->title}/$fileName"
                    ]);
                }
            }

        }
    }
}
