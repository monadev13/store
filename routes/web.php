<?php

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[SliderController::class,'index'])->name('welcome');

// Route::get('/',[TaskController::class,'index'])->name('index');
Route::group(['prefix'=>'slider','as'=>'slider.'],function(){
    Route::get('/',[SliderController::class,'index'])->name('index');
    Route::get('/create',[SliderController::class,'create'])->name('create');
    Route::post('/store',[SliderController::class,'store'])->name('store');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[SliderController::class,'update'])->name('update');
    Route::delete('/destroy/{id}',[SliderController::class,'destroy'])->name('destroy');

});
include('admin.php');

