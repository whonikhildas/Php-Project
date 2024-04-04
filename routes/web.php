<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([], function()
{
    Route::get('/index', function(){
        echo "first route";
    });
    Route::get('/login', function(){
        echo "login route";
    });
    Route::get('/register', function(){
        echo "register route";
    });
    Route::get('/contactcs', function(){
        echo "contact route";
    });
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
