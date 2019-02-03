<?php

namespace App\Services\HackerNews;

use Cache;
use App\Services\ServiceAbstract;

class TopStoriesIds extends ServiceAbstract
{
    public function get()
    {
        return Cache::remember('stories_ids', 10, function () {
            return json_decode($this->client->get('https://hacker-news.firebaseio.com/v0/topstories.json')->getBody());
        });
    }

}
