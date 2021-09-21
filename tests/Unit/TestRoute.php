<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\PseudoTypes\False_;

class TestRoute extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteRoot()
    {
        $response= $this->get('/');
        $response->assertRedirect('/home'); /**becasuse it redirects to homepage */
    }

    

   

}
