<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    public function show(){

          return view('welcome', []);

    }
    public function __construct()
    {
        //$this->middleware('auth');
    }
}
