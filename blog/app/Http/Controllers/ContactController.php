<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }
    public function getAddContact()
    {
        //return view('contact');
    }
    public function postAddContact()
    {
        //return view('contact');
    }
    public function getContact($id)
    {
        //return view('contact');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
