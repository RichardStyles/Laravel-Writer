<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    use DatabaseMigrations;

    protected $post;

    public function setUp()
    {
        parent::setUp();

        $this->post = create('App\Post');
    }

    /** @test */
    public function a_user_can_view_all_posts()
    {

        $response = $this->get('/posts');
        $response->assertStatus(200)
                ->assertSee($this->post->title)
                ->assertSee($this->post->body)
                ->assertSee($this->post->created_at->diffForHumans())
                ->assertSee($this->post->user->name);

    }

    /** @test */
    public function a_user_can_view_a_single_post()
    {
        $response = $this->get($this->post->path());
        $response->assertStatus(200)
            ->assertSee($this->post->title)
            ->assertSee($this->post->body)
            ->assertSee($this->post->created_at->diffForHumans())
            ->assertSee($this->post->user->name);
    }
}
