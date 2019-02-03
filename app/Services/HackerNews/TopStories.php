<?php

namespace App\Services\HackerNews;

use App\Services\ServiceAbstract;
use App\Services\HackerNews\TopStoriesIds;

class TopStories extends ServiceAbstract
{
    public function get()
    {
        return (new TopStoriesIds)->get();
    }
}
