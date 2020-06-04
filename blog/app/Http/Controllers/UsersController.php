<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function show($loggedin)
    {
        if ($loggedin) {
            return view('Users', []);
        } else {
            return view('Users', []);
        }
    }
}
