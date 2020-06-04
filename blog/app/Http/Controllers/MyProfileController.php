<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

class MyProfileController extends Controller
{
    public function show($loggedin)
    {
        if ($loggedin) {
            return view('MyProfile', []);
        } else {
            return view('MyProfile', []);
        }
    }
}
