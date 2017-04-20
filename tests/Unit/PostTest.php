<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{

    use DatabaseMigrations;

    /** @var Post */
    protected $post;

    public function setUp()
    {
        parent::setUp();
        $this->post = create('App\Post');
    }

    /** @test */
    function a_thread_can_make_a_string_path()
    {
        $this->assertEquals(
            "/posts/{$this->post->id}", $this->post->path()
        );
    }
    /** @test */
    function a_thread_has_a_creator()
    {
        $this->assertInstanceOf('App\User', $this->post->creator);
    }

}
