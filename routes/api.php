<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('register','AuthorizationController@register');
    Route::post('login', 'AuthorizationController@login');
    Route::post('logout', 'AuthorizationController@logout');
    Route::post('refresh', 'AuthorizationController@refresh');
    Route::post('me', 'AuthorizationController@me');

});

Route::get('/',function (Request $request){
//    return \App\Models\User::all();

    return api()->success('dddd');
    return response()->json([
        'code' => 200,
        'message' => 'success'
    ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
