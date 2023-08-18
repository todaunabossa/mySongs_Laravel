<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FavoritesControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testFavoritesRoute(): void
    {
        $response = $this->get('/favorites');

    $response->assertStatus(200);
    $response->assertOk();
}
}
