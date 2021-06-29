<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cities', 'StateController@index');
Route::get('cities/{id}', 'StateController@show');

Route::get('cities', 'CityController@index');
Route::get('cities/{id}', 'CityController@show');

Route::get('users', 'UsersController@index');
Route::get('users/{id}', 'UsersController@show');
Route::post('users', 'UsersController@store');
Route::put('users/{id}', 'UsersController@update');
Route::delete('users/{id}', 'UsersController@delete');

Route::get('users/addresses', 'UsersAddressController@index');
Route::get('users/addresses/{id}', 'UsersAddressController@show');

