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
            'numberOfResult' => '20',
            'pagenumber' => '1',
            'filterByUpdateDate' => '',
        ])->json();
        $data = $response['result'] ;
        return view('pages.event', compact('data'));
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
}
