<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index() {
        $places = DB::select('select * from member_places');
        return view('pages.homepage')->with('places', $places);
    }
}
