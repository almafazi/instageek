<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function show($username) {
        return User::whereUsername($username)->get();
    }
}
