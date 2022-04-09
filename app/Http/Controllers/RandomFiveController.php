<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class RandomFiveController extends Controller
{
    //

    public function getQuotes()
    {
        $quotes = [];
        for ($i = 0; $i < 5; $i++) {
            $response = Http::get('https://api.kanye.rest');
            $quotes[] = $response->json()['quote'];
        }
        return view('welcome', ['quotes'=>$quotes]);
    }
}
