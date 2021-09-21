<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResponseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testResponse()
    {
       $this->post('Users',[
        'id'=>'2',
        'name'=>'tomal',
        'email'=>'sazzad@gmail.com',

       ]);

       $this->assertDatabaseHas('users',['email'=>"sazzad@gmail.com"]);
    }
}

