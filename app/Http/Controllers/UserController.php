<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Validator;
use Auth;

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
        $user = DB::table('users')->where('username', $username)->first();
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
        return view('pages.member.member_profile', [
            'user_detail' => $user
        ]);
        // return dd($user->updated_at);
    }
    public function user_passchange(){
        return view('pages.member.passchange');
    }
    public function pass_update(Request $request) {
        $this->validate($request, [
            'currect_pass'     => 'required',
            'new_pass'     => 'required|min:6',
            'confirm_newpass' => 'confirmed',
        ]);
        $currect_pass = $request->input('currect_pass');
        $new_pass = $request->input('new_pass');
        $confirm_newpass = $request->input('confirm_newpass');
        $username = $request->input('username');
        $test = DB::table('users')->where('username', $username)->first();
        $old_pass = $test->password ;
        
        if(!Hash::check($currect_pass, $old_pass)){
            return redirect()->back()->withErrors("รหัสผ่านปัจจุบันไม่ถูกต้อง");
        }else{
            $hashed = Hash::make($new_pass);
            DB::update('update users set password = ? where username = ?', [$hashed,$username]);
            return view('pages.member.member_profile', [
                'user_detail' => $test 
            ]);
            
        }
    }
}
