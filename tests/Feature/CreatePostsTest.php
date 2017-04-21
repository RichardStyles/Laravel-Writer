<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreatePostsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_authorised_user_can_create_new_posts()
    {
        $this->signIn();

        $post = make('App\Post');

        $this->post('/words',$post->toArray());

        $this->get($post->path())
            ->assertSee($post->title)
            ->assertSee($post->body)
            ->assertStatus(200);
    }
}
