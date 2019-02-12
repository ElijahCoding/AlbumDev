<?php

namespace App\Services\Github;

use App\Services\Github\GithubAbstract;

class GetRepositories extends GithubAbstract
{
    public function get()
    {
        $response = $this->client->request('GET', '/user/repos?per_page=100');

        return json_decode($response->getBody());
    }
}
