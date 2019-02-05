<?php

namespace App\Services\Reddit;

use App\Services\ServiceAbstract;
use App\Services\Transformers\RedditTransformer;

class Stories extends ServiceAbstract
{
    public function get($limit = 20)
    {
        $response = $this->client->request('GET', 'https://www.reddit.com/r/popular.json?limit=' . $limit, [
            'headers' => ['User-Agent' => 'Distract']
        ]);

        return (new RedditTransformer(json_decode($response->getBody())->data->children))->create();
    }
}
