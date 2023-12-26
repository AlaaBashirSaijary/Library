<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
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
Route::get('/home', function () {
    return view('pages.home');
});


Route::get(
    '/home',
    [PagesController::class, 'getPages1']
);
Route::get(
    '/about',
    [PagesController::class, 'getPages4']
);
Route::get(
    '/contact',
    [PagesController::class, 'getPages5']
);

