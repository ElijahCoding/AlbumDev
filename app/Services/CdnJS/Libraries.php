<?php

namespace App\Services\CdnJS;

use Cache;
use App\Models\Programming\Cdn\Library;

class Libraries
{
    public static function get()
    {
        $libraries = Cache::remember('libraries', 30, function () {
            return json_encode(Library::get());
        });

        return json_decode($libraries);
    }
}
