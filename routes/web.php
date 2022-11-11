<?php

use App\Http\Controllers\KebijakanCategoryController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\SliderController;
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
    return view('frontend.beranda');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('backend_layouts.main');
    })->name('dashboard');
    Route::resource('kebijakan', KebijakanController::class);
    Route::resource('kebijakanCategory', KebijakanCategoryController::class);
    Route::resource('slider', SliderController::class);
});
require __DIR__ . '/auth.php';
