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
		public function dataupdate(){
			return view('Users.DataUpdate');
		}
		public function passwordgeneration(){
			return view('Users.PasswordGeneration');
		}
		public function reregistrationshift(){
			return view('Users.ReregistrationShift');
		}
		public function format(){
			return view('Users.Format');
		}
		public function pruebas(){
			return view('Users.Pruebas');
		}
		public function adeudo(){
			return view('Users.Adeudo');
		}
		public function consulta(){
			return view('Users.Consulta');
		}
		public function passwordrecovery(){
			return view('Users.PasswordRecovery');
		}
		public function questionnaire(){
			return view('Users.Questionnaire');
		}
}
