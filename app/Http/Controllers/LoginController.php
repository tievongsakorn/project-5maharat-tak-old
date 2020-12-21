<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

class LoginController extends Controller
{  
    public function index(Request $request) 
    {
        return view('pages.member.login');
    } 

    function checklogin(Request $request) {
        $this -> validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);
        $user_data =array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            
            return redirect()->back();
        }
        else
        {
            return redirect()->back()->with('error','กรุณาตรวจสอบ Username และ Password อีกครั้ง');
        }
    }

    function successlogin()
    {
        return redirect()->back();
    }

    function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
