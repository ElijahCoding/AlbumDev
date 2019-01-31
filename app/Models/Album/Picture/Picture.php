<?php

namespace App\Models\Album\Picture;

use App\Models\Album\Album;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $guarded = [];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
