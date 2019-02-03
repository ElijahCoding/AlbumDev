<?php

namespace App\Services;

use GuzzleHttp\Client;

abstract class ServiceAbstract
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'cookies' => true
        ]);
    }

    abstract public function get();
}
