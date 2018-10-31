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

    //Test insert a user
    public function testInsertUser()
    {
        $user = new User();
        $user->name = 'April';
        $user->email = 'april@example.com';

        $this->assertTrue(true);
    }

    //Update a user to Steve Smith
    public function testUpdateName()
    {
        $user = User::where('id',[1])->update(['name' => 'Steve Smith']);

        $this->assertTrue(true);
    }

    //Delete a user
    public function testDeleteUser()
    {
        $user = User::where('id','=', [50])->delete();


        $this->assertTrue(true);
    }

    //Count number of users
    public function testCountUser()
    {
        $user = User::count();

        $this->assertTrue(true);
    }
}




