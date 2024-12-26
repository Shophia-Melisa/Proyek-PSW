<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GuestController extends Controller
{
    public function index()
    {
        return view('welcome');
        //
    }

    public function guest(){
        return view('guest.index');
    }

    public function Log(){
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],

            [
                'email.required' => 'Email Wajib diisi',
                'email.required' => 'Password Wajib diisi'
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if(Auth::user()->role =='admin'){
                return redirect('admin');
            } else if(Auth::user()->role =='guest'){
                return redirect('guest');
            }
        } else {
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }

   public function logout()
{   
    Auth::logout();
    return redirect('');
}

}
