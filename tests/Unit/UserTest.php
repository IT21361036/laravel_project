<?php

namespace Tests\Unit;
use App\Models\User;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
<<<<<<< HEAD
    // public function test_login_form():void
    // {
    //     $response = $this->get('/');
=======
     public function test_login_form():void
     {
         $response = $this->get('/login');
>>>>>>> 52b37116a4448eff332da895cd3e904b9ce52fc8

         $response->assertStatus(200);
     }
}
