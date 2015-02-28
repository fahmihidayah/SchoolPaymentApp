<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;
class CustomAuthController extends Controller {


	public function getLogin(Request $request){
		if(Auth::check()){
			return redirect('/admin');
		}
		else {
			return view('login');
		}
	}

	public function login(Request $request){
		$email = $request->get('email');
		$password = $request->get('password');

		if(Auth::attempt(['email' => $email, 'password' => $password])){
			return redirect('/admin');
		}
		else {
			return redirect('login');
		}
	}

	public function logout(){
		Auth::logout();
		return redirect('login');
	}

}
