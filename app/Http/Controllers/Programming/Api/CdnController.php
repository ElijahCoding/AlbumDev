<?php

namespace App\Http\Controllers\Programming\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Programming\Cdn\Library;

class CdnController extends Controller
{
    public function index()
    {
        return Library::get();
    }
}
