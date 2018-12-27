<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'imie'      => 'required',
            'nazwisko'  => 'required',
        	'email'     => 'email|unique:users',
        	'login'		=> 'required|unique:users',
        	'haslo' 	=> 'required',
        ]);
        
        $user = new User([
            'imie'  => $request->get('imie'),
            'nazwisko'  => $request->get('nazwisko'),
        	'login'		=> $request->get('login'),
        	'haslo'		=> $request->get('haslo'),
        	'email'		=>$request->get('email')
        ]);

       /* $isUnique = User::where('login', '=', (getEvent()->hash.'_'.$request->get('login')))->first();
        if($isUnique!=null){
            return redirect()->route('user.create')->with('errorMessage','Account already Exists!!');
        }*/
        
        
        DB::table('users')->insert(
        		['imie' => $user->getImie(),
        		 'nazwisko' => $user->getNazwisko(),
        		 'login' => $user->getLogin(),
        		 'password' => $user->getHaslo(),
        		 'email' => $user->getEmail()
        		]);
        return redirect()->route('user.create')->with('success', 'Zarejestrowano pomyslnie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
