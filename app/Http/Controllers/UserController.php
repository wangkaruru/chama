<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
      public function terms()
    {
    	return view('terms');
   
}
public function register()
    {
    	return view('register');
   
}

}
