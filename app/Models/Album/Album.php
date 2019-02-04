<?php

namespace App\Models\Album;

use App\Models\Album\Picture\Picture;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];

    protected $with = ['pictures'];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
