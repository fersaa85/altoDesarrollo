<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('welcome')->with(["promotional_modal" => env('PROMOTIONAL_MODAL', '')]);
});
Route::get('/villetinto', function () {
    return view('landing')->with(["promotional_modal" => env('PROMOTIONAL_MODAL', '')]);
});

Route::get('/gracias', function () {
    return view('thankyou');
})->name('thankyou');

Route::post('contact', ContactController::class)->name('contact');