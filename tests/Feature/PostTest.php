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
    public function a_user_can_browse_posts()
    {
        $post = factory('App\Post')->create([
            'title' => "The title of a post",
            'body' => "The body of the post"
        ]);

        $response = $this->get('/post');
        $response->assertStatus(200);
        $response->assertSee($post->title);
        $response->assertSee($post->body);

        $response = $this->get('/post/' . $post->id);
        $response->assertStatus(200);
        $response->assertSee($post->title);
        $response->assertSee($post->body);
    }
}
