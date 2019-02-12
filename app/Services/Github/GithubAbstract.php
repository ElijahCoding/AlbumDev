<?php

namespace App\Services\Github;

use GuzzleHttp\Client;

abstract class GithubAbstract
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('services.github.base_uri'),
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.github.token')
            ],
            'cookies' => true
        ]);
    }

    abstract public function get();
}
