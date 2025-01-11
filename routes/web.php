<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RealStateController;
use Illuminate\Support\Facades\Route;

// USER 

Route::get('/nos-immobiliers', [RealStateController::class, 'nos_immobiliers_page'])->name('nos_immobiliers_page');
// Route::get('/immobiliers-details/{id}', [RealStateController::class, 'index'])->name('immobiliers-details'); 

Route::get('/contact', [RealStateController::class, 'contact_page'])->name('contact_us_page');
Route::get('/', [RealStateController::class, 'index_page'])->name('welcome_page');


// ADMIN

Route::prefix("admin")->middleware(['auth', 'verified'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('/immobiliers', [RealStateController::class, 'immobilier_admin_page'])->name('immobilier_admin_page');
    Route::get('/gestion-immobiliers', [RealStateController::class, 'gestion_admin_page'])->name('gestion_admin_page');
    Route::get('/messages', [MessageController::class, 'messages_admin_page'])->name('messages_admin_page');


    Route::view('profile', 'profile')->name('profile');

});








require __DIR__ . '/auth.php';
