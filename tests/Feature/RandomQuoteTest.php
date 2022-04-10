<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RandomQuoteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**
     * A success test to get quotes
     *
     * @return void
     */
    public function test_quotes_api()
    {
        $response = $this->get('/api/quote/random/5');

        $response->assertStatus(200);
    }

    /**
     * A success test to get quotes
     *
     * @return void
     */
    public function test_quotes_fail_char()
    {
        $response = $this->get('/api/quote/random/char');

        $response->assertStatus(404);
    }

    /**
     * A success test to get quotes
     *
     * @return void
     */
    public function test_quotes_fail_negative()
    {
        $response = $this->get('/api/quote/random/-10');

        $response->assertStatus(404);
    }
}
