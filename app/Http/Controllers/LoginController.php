<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Hash;
use Laravel\Ui\Presets\React;

class LoginController extends Controller
{

            public function check(Request $request){

                    $data['email'] = $request->get('email');
                    $data['password'] = ($request->get('password'));
            
                   // dd($data);
            
                    if (Auth::attempt( $data )) {

                        $request->session()->regenerate();

                        return redirect()->intended('contactos');
                        // return view('contactos');

                    }             
                    return back()
                            ->withErrors([
                                'email' => 'The provided credentials do not match our records.',
                            ])
                            ->onlyInput('email');
                } 
            
            
                public function sacar(Request $request){
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                    return redirect()->route('login');

                }
}


