<?php

namespace Tests\Unit;

use Tests\TestCase;

class RandomQuoteTest extends TestCase
{
    /**
     * A Unit Test to Check if Random 5 quotes are returned
     *
     * @return void
     */
    public function test_quotes_value()
    {
        $this->get('api/quote/random/5')
            ->assertStatus(200)
            ->assertJsonStructure(['random quotes'])
            ->assertJsonCount(5, 'random quotes')
            ->getContent();
    }

    /**
     * A Unit Test to Check if Random 20 quotes are returned
     *
     * @return void
     */
    public function test_quotes_other_value()
    {
        $this->get('api/quote/random/3')
            ->assertStatus(200)
            ->assertJsonStructure(['random quotes'])
            ->assertJsonCount(3, 'random quotes')
            ->getContent();
    }

    /**
     * A Unit Test to Check if character error is returned
     *
     * @return void
     */
    public function test_quotes_error()
    {
        $this->get('api/quote/random/char')
            ->assertStatus(404)
            ->assertJson([
                'message' => 'Paramaters is not a number'
            ]);
    }
}
