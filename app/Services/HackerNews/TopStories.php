<?php

namespace App\Services\HackerNews;

use Cache;
use App\Services\ServiceAbstract;
use App\Services\Transformers\HackerNewsTransformer;

class TopStories extends ServiceAbstract
{
    public function get($limit = 20)
    {
        $response = $this->client->request('GET', 'https://hacker-news.firebaseio.com/v0/topstories.json');

        $ids = array_slice(json_decode($response->getBody()), 0, $limit);

        $stories = [];

        foreach ($ids as $id) {
            $stories[] = json_decode(
                $this->client->request('GET', 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json')->getBody()
            );
        }
        return (new HackerNewsTransformer($stories))->create();
    }
}
