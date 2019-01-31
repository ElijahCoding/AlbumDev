<?php

namespace App\Models\Album;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];

    public function pictures()
    {
        return $this->hasMany();
    }
}
