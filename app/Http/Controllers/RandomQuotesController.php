<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class RandomQuotesController extends Controller
{
    private function getQuotes($number)
    {
        $quotes = [];
        for ($i = 0; $i < $number; $i++) {
            $response = Http::get('https://api.kanye.rest');
            $quotes[] = $response->json()['quote'];
        }
        return $quotes;
    }

    /**
     * Getting Random Kanye Quotes API
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $number
     * @return \Illuminate\Http\Response
     */
    public function quotesApi(Request $request, $number)
    {
        if (is_numeric($number)) {
            if($number > 1) {
            $quotes = $this->getQuotes($number);
            return response()->json(array('random quotes' => $quotes));
            }
            return response()->json([
                'message' => 'Number Should be greater than 0'
            ], 404);
            
        }
        return response()->json([
            'message' => 'Paramaters is not a number'
        ], 404);
    }

    public function quotesView()
    {
        $quotes = $this->getQuotes(5);
        return view('welcome', ['quotes' => $quotes]);
    }
}
