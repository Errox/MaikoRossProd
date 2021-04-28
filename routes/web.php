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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return "yeet";
});


Route::get('/key', function(){
    artisan::call('key:generate');
});

// Route::group(['middleware' => ['auth']], function(){
//     Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
// });

// Route::group(['middleware' => ['auth', 'role:user|admin|superadmin',]], function(){
//     Route::get('/dashboard/profile', 'App\Http\Controllers\DashboardController@profile')->name('dashboard.profile');
// });

// Route::group(['middleware' => ['auth', 'role:admin|superadmin',]], function(){
//     Route::get('/dashboard/adminPanel', 'App\Http\Controllers\DashboardController@adminPanel')->name('dashboard.adminPanel');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

