<?php

use App\Http\Controllers\Dashboard\DashboardController;
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
    return view('home');
});

Route::get('/music', function () {
    return view('music.music');
});

Route::get('/list', function () {
    return view('music.list');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/register', function () {
//     return view('auth.register');
// });

Auth::routes();

Route::prefix('dashboard')
    ->controller(DashboardController::class)
    ->name('dashboard')
    ->group(function() {

    Route::get('', 'dashboard')->name('');

});
