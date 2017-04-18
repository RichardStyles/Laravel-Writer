<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_posts()
    {
        $post = factory('App\Post')->create();

        $response = $this->get('/post');
        $response->assertStatus(200);
        $response->assertSee($post->title);
        $response->assertSee($post->body);

    }

    /** @test */
    public function a_user_can_view_a_single_post()
    {
        $post = factory('App\Post')->create();

        $response = $this->get('/post/' . $post->id);
        $response->assertStatus(200);
        $response->assertSee($post->title);
        $response->assertSee($post->body);
    }
}
