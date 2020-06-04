<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    public function show($loggedin){
        if ($loggedin){
        return view('Home',[]);
        }else{
          return view('Home', []);
        }
    }
}
