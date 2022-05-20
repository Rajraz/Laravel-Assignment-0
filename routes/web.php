<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/company',[AdminController::class,'company']);

route::post('/uploadcompany',[AdminController::class,'uploadcompany']);

route::get('/showcompany',[AdminController::class,'showcompany']);

route::get('/deletecompany/{id}',[AdminController::class,'deletecompany']);

route::get('/updateview/{id}',[AdminController::class,'updateview']);

route::post('/updatecompany/{id}',[AdminController::class,'updatecompany']);

route::get('/employee',[AdminController::class,'employee']);

route::post('/uploademployee',[AdminController::class,'uploademployee']);

route::get('/showemployee',[AdminController::class,'showemployee']);

route::get('/deleteemployee/{id}',[AdminController::class,'deleteemployee']);

route::get('/updatevie/{id}',[AdminController::class,'updatevie']);

route::post('/updateemployee/{id}',[AdminController::class,'updateemployee']);
