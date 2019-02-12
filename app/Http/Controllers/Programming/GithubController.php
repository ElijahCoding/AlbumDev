<?php

namespace App\Http\Controllers\Programming;

use Cache;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Github\GetRepositories;

class GithubController extends Controller
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        $repositories = Cache::remember('github-repositories', 10, function () {
            return json_encode((new GetRepositories($this->client))->get());
        });

        return view('programming.github.index', [
            'repositories' => json_decode($repositories)
        ]);
    }
}
