<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use App\Models\Programming\Cdn\Library;

class FetchLibraries extends Command
{
    protected $signature = 'get:libraries';

    protected $description = 'Get all libraries from https://cdnjs.com';

    protected $client;

    public function __construct(Client $client)
    {
        parent::__construct();

        $this->client = $client;
    }

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
