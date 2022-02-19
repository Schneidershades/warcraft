<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_if_troops_has_been_assigned()
    {
        $response = $this->post('/api/war', [
            'number' => '30',
        ]);

        $response->assertStatus(200);
    }

    public function test_if_troops_has_been_assigned_and_is_less_than_troop_assigned_group()
    {
        $response = $this->post('/api/war', [
            'number' => '2',
        ]);

        $response->assertStatus(409);
    }
}
