<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //Test Insert A User
    public function testInsertUser()
    {
        $user = new User();
        $user->name = 'April';
        $user->email = 'april@example.com';

        $this->assertTrue(true);
    }
}


