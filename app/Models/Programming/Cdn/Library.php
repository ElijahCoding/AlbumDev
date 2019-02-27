<?php

namespace App\Models\Programming\Cdn;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use Searchable;
    
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'name';
    }
}
