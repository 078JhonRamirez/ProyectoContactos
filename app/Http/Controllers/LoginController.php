<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Hash;

class LoginController extends Controller
{

            public function check(Request $request){
 
                    $data['email'] = $request->get('email');
                    $data['password'] = Hash::make($request->get('password'));
            
                    // dd($data);
            
                    if (Auth::attempt( $data )) {

                        $request->session()->regenerate();

                        return redirect('contactos');
                        // return view('contactos');


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


