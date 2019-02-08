<?php

namespace App\Models\Programming\Cdn;

use Illuminate\Database\Eloquent\Model;
use App\Models\Programming\Cdn\LibraryDetail;

class Library extends Model
{
    protected $guarded = [];

    protected $with = ['library_detail'];

    public function library_detail()
    {
        return $this->hasOne(LibraryDetail::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
