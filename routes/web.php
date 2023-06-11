<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\AdminController;

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
//Routes Web
Route::prefix('Admin')->name('Admin.')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
}); 

//Routes Web
Route::prefix('library')->name('library.')->group(function(){
    Route::get('/',[SiteController::class,'index'])->name('index');
});





Route::get('/', function () {
    return view('welcome');
});
