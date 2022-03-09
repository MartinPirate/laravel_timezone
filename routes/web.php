<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::middleware('auth')->group(function (){*/

    Route::get('/',[TodoController::class,'index'])->name('home');
    Route::get('/show/{todo}',[TodoController::class,'show'])->name('show');
    Route::get('/toggle/{todo}',[TodoController::class,'toggle'])->name('toggle');
    Route::get('/edit/{todo}',[TodoController::class,'edit'])->name('edit');
    Route::get('/delete/{todo}',[TodoController::class,'destroy'])->name('delete');
    Route::get('/create',[TodoController::class,'create']);
    Route::post('/save',[TodoController::class,'store']);
    Route::post('/update/',[TodoController::class,'update']);
/*});*/

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
