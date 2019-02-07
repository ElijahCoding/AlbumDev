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

    }
}
