<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;

class LoggingController extends Controller{

    public function doLogin(Request $request){
        $this->validate($request, [
            'login'		=> 'required',
        ]);

        /*$userdata = array(
            'login'     => $request->get('login'),
            'password'  => hash('sha256', $request->get('haslo'))
        );*/

        $login = $request->get('login');
        $password = $request->get('haslo');
        //var_dump($password);

        if (Auth::attempt(['login' => $login, 'password' => $password])) {
            // Authentication passed...
            echo "dupa2";
            //return redirect()->intended('dashboard');
        }
        else{
            echo $password  ;
           // return redirect('logowanie')->with('errorMessage', "Zly login lub haslo");
        }
    }
}