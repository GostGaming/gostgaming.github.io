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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/portfolio', function() {
    return view('portfolio');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();
/** 
 * TODO: Remove all login and register stuff
 * Remove/change "Laravel" in header
 * update header to nav bar stuff
 * place images in portfolio
 * link to code
 * demo somehow? 
 * Link to resume
 * Contact info page
 * nav at footer and header
 */
