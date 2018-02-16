<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
		public function login(){
			return view('Users.login');
		}
		public function steps(){
			return view('Users.steps');
		}
}
