<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UsersAddressController;


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

Route::get('states', [StateController::class, 'index'])->name('state.all');
Route::get('states/{id}', [StateController::class, 'show'])->name('state.show');

Route::get('cities', [CityController::class, 'index'])->name('city.all');
Route::get('cities/{id}', [CityController::class, 'show'])->name('city.all');

Route::get('users/addresses', [UsersAddressController::class, 'index']);
Route::get('users/{user_id}/addresses', [UsersAddressController::class, 'index']);
Route::get('users/{user_id}/addresses/{id}', [UsersAddressController::class, 'show']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'delete']);



