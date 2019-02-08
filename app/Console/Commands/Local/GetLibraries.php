<?php

namespace App\Console\Commands\Local;

use Illuminate\Console\Command;
use App\Models\Programming\Cdn\Library;

class GetLibraries extends Command
{
    protected $signature = 'get:local-libraries';

    protected $description = 'Get libraries from local storage';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $path = public_path() . '/data/libraries.csv';

        $data = [];

        if (($h = fopen($path, "r")) !== FALSE)
        {
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
            {
                $the_big_array[] = $data;
            }
            array_shift($the_big_array);
        }

        fclose($h);

        for ($i = 0; $i < count($the_big_array); $i++) {
            Library::create([
                'name' => explode(';', $the_big_array[$i][0])[1],
                'link' =>  explode(';', $the_big_array[$i][0])[2]
            ]);
        }

    }
}
