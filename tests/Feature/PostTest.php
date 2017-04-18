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

        $this->get('/post')
            ->assertStatus(200)
            ->assertSee($post->title)
            ->assertSee($post->body);
    }
}
