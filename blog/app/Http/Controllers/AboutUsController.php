<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;

class AboutUsController extends Controller
{
    public function show($loggedin){
        if ($loggedin){
            return view('AboutUs',[]);
        }else{
            return view('AboutUs', []);
        }
    }
}
