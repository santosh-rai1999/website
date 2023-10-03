<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/aboutus',[FrontendController::class,'about'])->name('about');
Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('/staff',[FrontendController::class,'staff'])->name('staff');
Route::get('/notices',[FrontendController::class,'notice'])->name('notice');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('about',AboutController::class)->names('about');
    Route::resource('notice',NoticeController::class)->names('notice');
    Route::resource('event',EventController::class)->names('event');
    Route::resource('staff',StaffController::class)->names('staff');
    Route::resource('gallery',GalleryController::class)->names('gallery');
    Route::resource('carousel',CarouselController::class)->names('carousel');
    Route::resource('facility',FacilityController::class)->names('facility');
});

require __DIR__.'/auth.php';
