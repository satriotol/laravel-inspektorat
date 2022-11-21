<?php

use App\Http\Controllers\BeritaCategoryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaSubcategoryController;
use App\Http\Controllers\BeritaGalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KebijakanCategoryController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
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

Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

Route::get('/', [IndexController::class, 'beranda'])->name('beranda');
Route::get('/berita', [IndexController::class, 'berita'])->name('berita');
Route::get('/berita/{berita}', [IndexController::class, 'detailBerita'])->name('detailBerita');
Route::get('/berita/category/{beritaCategory}', [IndexController::class, 'beritaCategory'])->name('beritaCategory');
Route::get('/kegiatan', [IndexController::class, 'kegiatan'])->name('kegiatan');
Route::get('/kegiatan/{berita}', [IndexController::class, 'detailKegiatan'])->name('detailKegiatan');
Route::get('/kegiatan/category/{beritaCategory}', [IndexController::class, 'kegiatanCategory'])->name('kegiatanCategory');
Route::get('/kebijakan/{kebijakan}', [IndexController::class, 'kebijakan'])->name('kebijakan');
Route::get('/kebijakan/detailKebijakan/{kebijakan}', [IndexController::class, 'detailKebijakan'])->name('detailKebijakan');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('backend_layouts.main');
    })->name('dashboard');
    Route::resource('kebijakan', KebijakanController::class);
    Route::resource('tema', TemaController::class);
    Route::resource('kebijakanCategory', KebijakanCategoryController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('beranda', BerandaController::class);
    Route::resource('master', MasterController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::get('user/resetPassword/{user}', [UserController::class, 'reset_password'])->name('user.resetPassword');
    Route::resource('link', LinkController::class);

    Route::resource('berita', BeritaController::class);
    Route::get('berita/verifikasi/{berita}', [BeritaController::class, 'verification'])->name('berita.verification');
    Route::resource('beritaCategory', BeritaCategoryController::class);
    Route::resource('beritaGallery', BeritaGalleryController::class)->except([
        'destroy'
    ]);
    Route::get('beritaGallery/destroy/{beritaGallery}', [BeritaGalleryController::class, 'destroy'])->name('beritaGallery.destroy');
    Route::resource('beritaSubcategory', BeritaSubcategoryController::class);

    Route::post('upload/image', [UploadController::class, 'storeImage'])->name('upload.storeImage');
    Route::post('upload/file', [UploadController::class, 'storeFile'])->name('upload.storeFile');
    Route::delete('revert/image', [UploadController::class, 'revert'])->name('upload.revert');
});
require __DIR__ . '/auth.php';
