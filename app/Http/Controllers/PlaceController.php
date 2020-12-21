<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlaceController extends Controller
{
    public function show($id) {
        // $data = DB::table('member_places')->where('username', $id)->first();
        $data = DB::select('select * from member_places where username = ?', [$id]);
        // return dd($data);
        return view('pages.member.myplace')->with('data', $data);
    }
    public function destroy($id) {
        DB::delete('delete from member_places where id = ?', [$id]);
        return redirect()->back();
    }
}
