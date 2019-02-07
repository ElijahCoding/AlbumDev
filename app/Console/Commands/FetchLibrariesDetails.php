<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use App\Models\Programming\Cdn\Library;
use App\Console\Commands\CommandContract;
use App\Models\Programming\Cdn\LibraryDetail;

class FetchLibrariesDetails extends CommandContract
{
    protected $signature = 'get:details';

    protected $description = 'Get libraries details from https://cdnjs.com';

    public function handle()
    {
        $libraries = Library::get();

        foreach ($libraries as $library) {
            $response = json_decode(
                $this->client->request('GET', "https://api.cdnjs.com/libraries/{$library->name}")->getBody()
            );

            $library->library_detail()->create([
                'current_version' => $response->version,
                'description' => $response->description,
                'repository' => !empty($response->repository->url) ? $response->repository->url : null,
                'homepage' => !empty($response->homepage) ? $response->homepage : null
            ]);
        }
    }
}
