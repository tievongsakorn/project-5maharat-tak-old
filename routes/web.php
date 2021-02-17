<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/detail', function () {
    $places = DB::select('select * from member_places');
    return view('pages.detail')->with('places', $places);
});

Route::get('eventpage/{id}', 'App\Http\Controllers\TatapiController@index');
Route::get('eventpagenex/{id}', 'App\Http\Controllers\TatapiController@nextpage');
Route::get('eventpagepre/{id}', 'App\Http\Controllers\TatapiController@prepage');
Route::get('event/{id}', 'App\Http\Controllers\TatapiController@showdetail');

Route::resources([
    '/user' => 'App\Http\Controllers\UserController',
]);
Route::get('/user_passchange', 'App\Http\Controllers\UserController@user_passchange');
Route::post('/pass_update', 'App\Http\Controllers\UserController@pass_update');
Route::get('member', 'App\Http\Controllers\LoginController@index');
Route::post('/member/checklogin', 'App\Http\Controllers\LoginController@checklogin');
Route::get('/member/successlogin', 'App\Http\Controllers\LoginController@successlogin');
Route::get('/member/logout', 'App\Http\Controllers\LoginController@logout');
Route::get('/register', 'App\Http\Controllers\UserController@index');
Route::get('member/editprofile/{username}', 'App\Http\Controllers\UserController@show');
Route::get('routephorkun', function () {
    return view ('pages.route.routephorkun');
});
Route::get('routepranaret', function () {
    return view ('pages.route.routepranaret');
});
Route::get('routepranarai', function () {
    return view ('pages.route.routepranarai');
});
Route::get('routechawtak', function () {
    return view ('pages.route.routechawtak');
});
Route::get('routepraadul', function () {
    return view ('pages.route.routepraadul');
});

Route::resource('member_toppic', 'App\Http\Controllers\ToppicController');

Route::get('/myplace/{user}', [PlaceController::class, 'show']);

Route::get('/myplace/del/{id}',[PlaceController::class, 'destroy']) ;

Route::resources([
    '/comment' => 'App\Http\Controllers\CommentController',
]);


Route::get('/route/{id}', [CommentController::class, 'show']);

Route::get('generate', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});