<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testHomePage()
    {
        $response = $this->get('/');

        $response->assertSeeText('Welcome dashboard');

    }

    public function testAddPost()
    {
        //act
        $response = $this->get('/testposts');

        //assert
        $this->assertDatabaseHas('data_posts',[
            'title' => 'title',
            'content' => 'content']
        );

    }
}
