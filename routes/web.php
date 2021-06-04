<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactForm;

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

Route::post('/contactForm', [ContactForm::class, 'store']);

Route::get('/key', function(){
    artisan::call('key:generate');
});

Route::get('/key2', function(){
    artisan::call('cache:clear');
    artisan::call('config:clear');
});

Route::get('/key3', function(){
    artisan::call('storage:link');
});

Route::get('/migrate', function(){
    artisan::call('migrate');
});

Route::get('images/{filename}', function ($filename){
    $path = storage_path() . '/app/public/images/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('css/{filename}', function ($filename){
    $path = storage_path() . '/app/public/css/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", "text/css");

    return $response;
});

Route::get('video/{filename}', function ($filename){
    $path = storage_path() . '/app/public/video/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $path);

    return $response;
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

