<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

class RegistrationController extends Controller
{
    public function show($loggedin)
    {
        if ($loggedin) {
            return view('Registration', []);
        } else {
            return view('Registration', []);
        }
    }
}
