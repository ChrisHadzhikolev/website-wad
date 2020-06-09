<?php
namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;

use App\User;

class ContactController extends Controller
{
    public function getAll()
    {
        $data = Contact::orderBy('id', 'desc')->get();
        // Generate 10 random announcements

        // Show it in a the view
        return view('contact', ['announcements' => $data] );
    }
    public function show($loggedin){
        if ($loggedin){
            return view('ContactUs',[]);
        }else{
            return view('ContactUs', []);
        }
    }
}
