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
        $path_img = "defualt";
        $this -> validate($request,[
            'place_name' => 'required',
            'place_detail' => 'required',
            'place_type' => 'required',
            'map_url' => 'required',
            'username'=> 'required', 
        ]);
        if ($request->file('place-img')== null) {
            $path_img = "no_photo" ;
            // dd($path_img);
        }
        else {
            $path_img = $request->file('place-img')->store('public/img/place-img');
            $path = str_replace("public","storage",$path_img);
            // dd($path_img);
        }
        // $member_place = new Member_place(
        //     [   'place_name' => $request->input('place_name'),
        //         'place_detail' => $request->input('place_detail'),
        //         'place_type' => $request->input('place_type'),
        //         'place_img' => $request->input('map_url') ,
        //         'map_url' => $request->input('map_url'),
        //         'username' => $request->input('username')
        //     ]
        // );
        $member_place = new Member_place;
        $member_place -> place_name = $request->input('place_name');
        $member_place -> place_detail = $request->input('place_detail');
        $member_place -> place_type = $request->input('place_type');
        $member_place -> img_path = $path;
        $member_place -> map_url = $request->input('map_url');
        $member_place -> username = $request->input('username');
        $member_place->save();
        return redirect('/member_toppic');
        // // return redirect()->back();
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
        if ($request->file('place-img')== null) {
           //
        }
        else {
            $path_img = $request->file('place-img')->store('public/img/place-img');
            $path = str_replace("public","storage",$path_img);
            $member_place->img_path = $path;
        }
        // return dd($member_place);
        
        $member_place->update($request -> all());
        return redirect('myplace/'.$request->input('username').'');
    }
}
