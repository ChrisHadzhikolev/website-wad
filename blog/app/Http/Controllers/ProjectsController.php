<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

class ProjectsController extends Controller
{
    public function show($loggedin)
    {
        if ($loggedin) {
            return view('Projects', []);
        } else {
            return view('Projects', []);
        }
    }
}
