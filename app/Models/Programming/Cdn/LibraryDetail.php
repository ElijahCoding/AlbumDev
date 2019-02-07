<?php

namespace App\Models\Programming\Cdn;

use App\Models\Programming\Cdn\Library;
use Illuminate\Database\Eloquent\Model;

class LibraryDetail extends Model
{
    protected $guarded = [];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}
