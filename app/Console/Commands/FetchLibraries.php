<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use App\Models\Programming\Cdn\Library;
use App\Console\Commands\CommandContract;

class FetchLibraries extends CommandContract
{
    protected $signature = 'get:libraries';

    protected $description = 'Get all libraries from https://cdnjs.com';

    public function handle()
    {
        $response = $this->client->request('GET', 'https://api.cdnjs.com/libraries');

        $libraries = json_decode($response->getBody())->results;

        $bar = $this->output->createProgressBar(count($libraries));

        $bar->start();

        foreach ($libraries as $library) {
            $bar->advance();

            Library::create([
                'name' => $library->name,
                'link' => $library->latest
            ]);
        }
        $bar->finish();

        $this->info("/\nFinished");

    }
}
