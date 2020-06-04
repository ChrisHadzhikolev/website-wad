<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

class ContactUsController extends Controller
{
    public function show($loggedin){
        if ($loggedin){
            return view('ContactUs',[]);
        }else{
            return view('ContactUs', []);
        }
    }
}
