<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{

            public function check(Request $request){
 
                    $data['email'] = $request->get('email');
                    $data['password'] = $request->get('password');
            
                    if (Auth::attempt( $data )) {

                        $request->session()->regenerate();

                        return redirect()->intended();
                        return view('contactos');


                    }             
                    return back()
                            ->withErrors([
                                'email' => 'The provided credentials do not match our records.',
                            ])
                            ->onlyInput('email');
                } 
            
            
                public function sacar(){
                    Auth::logout();
                    return redirect()->route('index');
                }
}


