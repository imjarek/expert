<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Event;
use App\User;

class TestController extends Controller
{
    public function test()
    {
        Event::dispatch(
            'user.created', User::where('email', 'sergey.ch@neklo.com')->first()
        );
    }
}
