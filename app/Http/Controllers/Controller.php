<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    
    public function login_form(Request $request) {
        return view('login');
    }


    public function login(Request $request) {
        // dd($request->all());
        $request->validate(['username'=>'required', 'password'=>'required']);
        if(auth()->attempt(['email'=>$request->username, 'password'=>$request->password])){
            session()->flash('success', "Welcome. Admin Dashboard");
            return redirect()->route('reserved.home');
        }
        session()->flash('error', "Invalid credentials");
        return back();
    }


    public function logout(Request $request) {
        auth()->logout();
        session()->flush();
        return redirect()->route('login');
    }
}
