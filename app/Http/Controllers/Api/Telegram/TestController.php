<?php

namespace App\Http\Controllers\Api\Telegram;

use Telegram;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        $response = Telegram::getMe();
        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();

        dd($response, $botId, $firstName, $username);
    }
}
