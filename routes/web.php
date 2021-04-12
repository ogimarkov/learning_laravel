<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/users', function () {
    //dd('Enter');
    return view('users');
})->name('users');

//Route::resource('users', [UserController::class]);
Route::resource('photos', PhotoController::class);

/*
|--------------------------------------------------------------------------
| ROLE PERMISION
|--------------------------------------------------------------------------
*/

/* Route::get('/roles', 'PermissionController@Permission');

Route::group(['middleware' => 'role:developer'], function () {

    Route::get('/admin', function () {

        return 'Welcome Admin';
    });
}); */
