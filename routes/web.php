<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


//-------------------------------------help for business---------------------------
Route::get('addbusiness', [FrontendController::class, 'addBusiness'])->name('addbusiness');
Route::get('claim', [FrontendController::class, 'Claim'])->name('claim');
Route::get('Explore', [FrontendController::class, 'explore'])->name('Explore');
Route::get('login', [FrontendController::class, 'Login'])->name('login');

//--------------------------------review and start project-----------------------
Route::get('review', [FrontendController::class, 'Review'])->name('review');
Route::get('project', [FrontendController::class, 'Project'])->name('project');

//------------------------------resturant----------------------------------------
Route::get('takeout', [FrontendController::class, 'Takeout'])->name('takeout');
Route::get('contractor', [FrontendController::class, 'Contractor'])->name('contractor');

//=====================================sign and signup=============




// signup
Route::get('signup', [FrontendController::class, 'Signup'])->name('signup');
Route::post('signup/insert', [FrontendController::class, 'insert'])->name('insert');


// signin
Route::get('sigin', [FrontendController::class, 'Sigin'])->name('sigin');
Route::post('sigincheck', [FrontendController::class, 'signinCheck'])->name('signincheck');

Route::get('dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');
Route::get('dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');

Auth::routes(['verify' => true]);
Route::middleware(['auth', 'verified'])->get('dashboard', function () {
    return view('businessdashboard.dashboard');
})->name('dashboard');
