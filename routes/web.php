<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'home'])->name('index');
Route::get('addbusiness', [FrontendController::class, 'addBusiness'])->name('addbusiness');


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('addbusiness', function () {
//     return view('addbusiness');
// });

// Route::get('claim', function () {
//     return view('claim');
// });

// Route::get('contractor', function () {
//     return view('contractor');
// });

// Route::get('Explore', function () {
//     return view('Explore');
// });

// Route::get('project', function () {
//     return view('project');
// });

// Route::get('takeout', function () {
//     return view('takeout');
// });

// Route::get('review', function () {
//     return view('review');
// });
