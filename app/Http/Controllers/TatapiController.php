<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TatapiController extends Controller
{
    public function index() {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer G0pmxhVuSxUG2PauSYjhsfEvZozAdR(pTQa9K4gp1r6bCBhymko8dbWGdEciLJYo8uvBJ(R7oHVrYckCogO2eQW=====2',
            'Content-Type' => 'application/json',
            'Accept-Language' => 'th'
        ])->get('https://tatapi.tourismthailand.org/tatapi/v5/events',
        [
            'geolocation' => '16.884021, 99.125264',
            'sortby' => 'distance',
            'numberOfResult' => '18',
            'pagenumber' => '1',
            'filterByUpdateDate' => '',
        ])->json();
        $data = $response['result'] ;
        $lastpagechk = '0';
        $page = 1 ;
        return view('pages.event', compact('data','page','lastpagechk'));
    }

    public function showdetail($id) {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer G0pmxhVuSxUG2PauSYjhsfEvZozAdR(pTQa9K4gp1r6bCBhymko8dbWGdEciLJYo8uvBJ(R7oHVrYckCogO2eQW=====2',
            'Content-Type' => 'application/json',
            'Accept-Language' => 'th'
        ])->get('https://tatapi.tourismthailand.org/tatapi/v5/events/{event_id}',
        [
            'event_id' => $id 
        ])->json();
        $data = $response['result'] ;
        // return dd($data);
        return view('pages.event_detail', compact('data'));
    }
    public function nextpage($id) {
        $page = $id + 1 ;
        // return dd($page) ;
        $response = Http::withHeaders([
            'Authorization' => 'Bearer G0pmxhVuSxUG2PauSYjhsfEvZozAdR(pTQa9K4gp1r6bCBhymko8dbWGdEciLJYo8uvBJ(R7oHVrYckCogO2eQW=====2',
            'Content-Type' => 'application/json',
            'Accept-Language' => 'th'
        ])->get('https://tatapi.tourismthailand.org/tatapi/v5/events',
        [
            'geolocation' => '16.884021, 99.125264',
            'sortby' => 'distance',
            'numberOfResult' => '18',
            'pagenumber' => $page,
            'filterByUpdateDate' => '',
        ])->json();
        $data = $response['result'] ;
        if(count($data) < 2) {
            $lastpagechk = '1' ;
            return view('pages.event', compact('data','page','lastpagechk'));
        }
        else {
            $lastpagechk = '0' ;
            return view('pages.event', compact('data','page','lastpagechk'));
        }        
    }
    public function prepage($id) {
        if ($id == 1) {
            $page = $id ;
        }
        else {
            $page = $id - 1;
        }
        $response = Http::withHeaders([
            'Authorization' => 'Bearer G0pmxhVuSxUG2PauSYjhsfEvZozAdR(pTQa9K4gp1r6bCBhymko8dbWGdEciLJYo8uvBJ(R7oHVrYckCogO2eQW=====2',
            'Content-Type' => 'application/json',
            'Accept-Language' => 'th'
        ])->get('https://tatapi.tourismthailand.org/tatapi/v5/events',
        [
            'geolocation' => '16.884021, 99.125264',
            'sortby' => 'distance',
            'numberOfResult' => '18',
            'pagenumber' => $page,
            'filterByUpdateDate' => '',
        ])->json();
        $data = $response['result'] ;
        if(count($data) < 2) {
            $lastpagechk = '1' ;
            return view('pages.event', compact('data','page','lastpagechk'));
        }
        elseif ($page == 1) {
            $lastpagechk = '2' ;
            return view('pages.event', compact('data','page','lastpagechk'));
        }
        else {
            $lastpagechk = '0' ;
            return view('pages.event', compact('data','page','lastpagechk'));
        }
    }
}
