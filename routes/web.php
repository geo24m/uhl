<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\FormationController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

// Pages
Route::get('/', [HomeController::class, 'home'])->name('/');
Route::get('/notre-univesite', [PagesController::class, 'about'])->name('about');
Route::get('/faq', [PagesController::class, 'faq'])->middleware('guest');
Route::get('/notre-equipe', [PagesController::class, 'teams'])->name('teams');
Route::get('/admission', [PagesController::class, 'admission'])->name('admission');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Formation
Route::get('/formation', [FormationController::class, 'index'])->name('formation');
Route::get('/formation/{slug}', [FormationController::class, 'show'])->name('formation_show');

// Event
Route::get('/evenement', [EventController::class, 'index'])->name('event');
Route::get('/evenement/{slug}', [EventController::class, 'show'])->name('event_show');

// Blog
Route::get('/actualite', [BlogController::class, 'index'])->name('blog');
Route::get('/actualite/{slug}', [BlogController::class, 'show'])->name('blog_show');

// Admission
Route::post('/admission', [AdmissionController::class, 'store'])->name('admission_store');

// Contact
Route::post('/contact', ContactController::class)->name('contact_store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
