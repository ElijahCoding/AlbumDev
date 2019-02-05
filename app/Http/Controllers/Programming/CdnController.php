<?php

namespace App\Http\Controllers\Programming;

use Illuminate\Http\Request;
use App\Services\CdnJS\Libraries;
use App\Http\Controllers\Controller;

class CdnController extends Controller
{
    public function index()
    {
        return view('programming.cdn.index', [
            'libraries' => Libraries::get()
        ]);
    }
}
