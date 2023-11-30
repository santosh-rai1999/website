<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdmissionController;
use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\FacilityController;
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
Route::get('/staffus',[FrontendController::class,'staff'])->name('staff');
Route::get('/notices',[FrontendController::class,'notice'])->name('notice');
Route::get('/facilityus',[FrontendController::class,'facility'])->name('facilityus');
Route::get('/galleryus',[FrontendController::class,'galleries'])->name('galleryus');
Route::get('/singlegallery/{id}',[FrontendController::class,'gallery'])->name('singlegallery');
Route::get('/eventus',[FrontendController::class,'events'])->name('eventus');
Route::get('/admission',[FrontendController::class,'admission'])->name('admission');
Route::post('/postadmission',[FrontendController::class,'postadmission'])->name('postadmission');

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
    Route::resource('contact',ContactController::class)->names('contact');
    // Route::resource('admission',AdmissionController::class)->names('admission');
});

require __DIR__.'/auth.php';
