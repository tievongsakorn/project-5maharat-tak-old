<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.member.register');
    }
    public function store(Request $request)
    {   
        $dfstatus = 'member' ;
        $this -> validate($request,[
            'username' => 'required',
            'password' => 'required|confirmed|min:6',
            'name' => 'required',
            'lastname' => 'required',
            'prov'=> 'required', 
        ]);
        $password = $request->input('password'); 
        $hashed = Hash::make($password);
        $users = new User(
            [   
                'username' => $request->input('username'),
                'password' => $hashed,
                'name' => $request->input('name'),
                'lastname' => $request->input('lastname'),
                'prov' => $request->input('prov'),
                'status' => 'member'
            ]
        );
        $users->save();
        return redirect('/member');
    }
    public function login() 
    {
        return view('login');
    }

    public function show($username)
    {
        $user = DB::table('users')->where('username', $username)->first();;
        // return dd($user);
        return view('pages.member.member_profile', [
            'user_detail' => $user
        ]);
    }

    public function edit($id) {

        $user = User::find($id);
        return view('pages.member.member_edit ', [
            'o_data' => $user
        ]);
    }

    public function update(Request $request, $id) {
        $user = User::find($id); //ดึงข้อมูลเก่าออกมาจากDB  
        $this -> validate($request,[      //Validateค่าที่รับ
            'name' => 'required',
            'lastname' => 'required',
            'prov' => 'required'
        ]);
        $user -> update($request -> all());
        return view('pages.member_profile', [
            'user_detail' => $user
        ]);
        // return dd($user->updated_at);
        
    }
}
