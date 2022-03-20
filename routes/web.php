<?php

use Illuminate\Support\Facades\Route;

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




Route::group(['middleware'=>['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    // Route::get('/', function () {return view('welcome');});
    
});

Route::group(['middleware'=>['auth' , 'role:admin']], function () {
    Route::post('addUser', [RegisteredUserController::class])->name('addUser');
    Route::resource('users', UserController::class);
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');


});



require __DIR__.'/auth.php';

