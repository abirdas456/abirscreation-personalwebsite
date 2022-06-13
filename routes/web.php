<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactssController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SubscribeController;
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

/*front end start*/
######################################
/*
Route::get('/', function () {
    return view('admin.index');
});*/

Route::get('/', [FrontendController::class,'index']) -> name('home');

Route::get('/review', [ReviewController::class,'review']) ->name('review');

Route::get('/service', [ServiceController::class,'service']) ->name('service');

Route::get('/contact', [ContactController::class,'contact']) ->name('contact');

Route::get('/login', [LoginController::class,'login']) -> name('login');

Route::get('/signup', [SignupController::class,'signup']) -> name('signup');


Route::post('/subscribes/add', [SubscribeController::class,'subscribeAdd']) -> name('subscribe.add');

Route::post('/contactsses/add',[ContactssController::class,'contactssesAdd']) -> name('contactsses.add');



/*front end- end*/
######################################




/*admin start*/
######################################
/*
Route::get('/', function () {
    return view('admin.index');
});*/

Route::get('/home', [HomeController::class, 'index']);
/*admin end*/
######################################





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


