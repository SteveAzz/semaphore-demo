<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ExampleTest extends TestCase
{
    use WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/')
             ->see('Laravel 5');
    }
}
