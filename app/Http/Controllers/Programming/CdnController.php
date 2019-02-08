<?php

namespace App\Http\Controllers\Programming;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Programming\Cdn\Library;

class CdnController extends Controller
{
    public function index()
    {
        return view('programming.cdn.index');
    }

    public function show(Library $library)
    {

        return view('programming.cdn.show', compact('library'));
    }
}
