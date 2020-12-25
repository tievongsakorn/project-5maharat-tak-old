<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member_place;

class ToppicController extends Controller
{
    public function index() {
        $places = DB::select('select * from member_places');
        // return dd($places);
        return view('pages.member.member_toppic')->with('places', $places);
    }

    public function create() {
        return view('pages.member.add_place');
    }

    public function  store(Request $request) {
        $this -> validate($request,[
            'place_name' => 'required',
            'place_detail' => 'required',
            'place_type' => 'required',
            'map_url' => 'required',
            'username'=> 'required', 
        ]);
        $member_place = new Member_place(
            [   'place_name' => $request->input('place_name'),
                'place_detail' => $request->input('place_detail'),
                'place_type' => $request->input('place_type'),
                'map_url' => $request->input('map_url'),
                'username' => $request->input('username')
            ]
        );
        $member_place->save();
        return redirect('/member_toppic');
        // return redirect()->back();
    }
    
    public function show($id) {
    $data = DB::table('member_places')->where('id', [$id])->first();
    return view('pages.member.member_place-detail', compact('data'));
    // return dd($data);
    }


    public function edit($id) {
        $data = DB::table('member_places')->where('id', [$id])->first();
        return view('pages.member.member_place-edit', compact('data'));
        return dd($data);
    }

    public function update(Request $request,$id) {
        $member_place = Member_place::find($id);
        // return dd($member_place);
        $member_place->update($request -> all());
        return redirect('myplace/'.$request->input('username').'');
    }
}
