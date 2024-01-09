<?php
use App\Http\Controllers\PagesController;
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
// Route::get('/home', function () {
//     return view('pages.home');
// });

Route::get('/singgle', function () {
    return view('pages.blog-single');
});
Route::get('/details', function () {
    return view('pages.portfolio-details');
});
Route::get(
    '/home',
    [PagesController::class, 'getHome']
)->name("Home");
Route::get(
    '/details',
    [PagesController::class, 'getdetails']
)->name("Details");
Route::get(
    '/blog',
    [PagesController::class, 'getdetails']
)->name("Blog");
