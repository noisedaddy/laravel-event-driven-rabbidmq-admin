<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function random() {
        return \App\Models\User::inRandomOrder()->first()->id;
    }
}
