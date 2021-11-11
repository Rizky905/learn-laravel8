<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase; 
use Tests\TestCase;

class PostTest extends TestCase
{
    Use RefreshDatabase;
    public function testPost()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
