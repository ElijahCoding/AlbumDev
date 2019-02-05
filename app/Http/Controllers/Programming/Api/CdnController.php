<?php

namespace App\Http\Controllers\Programming\Api;

use Illuminate\Http\Request;
use App\Services\CdnJS\Libraries;
use App\Http\Controllers\Controller;

class CdnController extends Controller
{
    public function index()
    {
        return Libraries::get();
    }
}
