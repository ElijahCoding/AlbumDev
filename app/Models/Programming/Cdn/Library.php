<?php

namespace App\Models\Programming\Cdn;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'name';
    }
}
