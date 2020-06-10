<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
            return view('contact', []);
    }
}
