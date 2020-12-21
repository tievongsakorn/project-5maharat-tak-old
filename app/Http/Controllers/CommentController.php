<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){
        $places = DB::select('select * from member_places');
        return redirect()->back();
    }
    public function store(Request $request) {
        $id = $request->input('route_id');
        $this -> validate($request,[
            'route_id' => 'required',
            'comment_des' => 'required',
            'username' => 'required',
            'rate' => 'required'
        ]);
        $comment = new Comment(
            [   'route_id' => $request->input('route_id'),
                'comment_des' => $request->input('comment_des'),
                'username' => $request->input('username'),
                'rate' => $request->input('rate')
            ]
        );
        
        $comment->save();
        // return redirect()->action('App\Http\Controllers\CommentController@show', [$id]);
        return redirect()->back();
        // return dd($request);
    }

    public function show($id) {
        // return dd($id);
        // $data = DB::table('comments')->where('route_id', [$id]);
        $data = DB::select('select * from comments where route_id = ?',[$id]);
        if ($id==1) {
            $pages = "pages.route.routephorkun" ;
        }
        elseif ($id==2) {
            $pages = "pages.route.routepranaret" ;
        }
        elseif ($id==3) {
            $pages = "pages.route.routepranarai" ;
        }
        elseif ($id==4) {
            $pages = "pages.route.routechawtak" ;
        }
        elseif ($id==5) {
            $pages = "pages.route.routepraadul" ;
        }
        else {
            return "Sorry Something Wrong" ;
        }

        if (isset($data)) {
            $sum_rate = 0 ;
            $sum_count = 0 ; 
            $avg_rate = 0;
            foreach ($data as $newdata) {
                $sum_rate =  $sum_rate + $newdata->rate ;
                $sum_count ++ ;
            }
            if ($sum_count != 0 ) {
                $avg_rate = $sum_rate/$sum_count ;
            }
            $avg_rate_format = number_format($avg_rate, 1) ;
        }
        else {
            $avg_rate_format = 0;
        }
        // return dd($avg_rate_format) ;
        // $avg_rate = $data[0]['rate'] ;
        // return dd($avg_rate);
        return view($pages, compact('data','avg_rate_format'));
        
        // return dd($data);
    }
}
