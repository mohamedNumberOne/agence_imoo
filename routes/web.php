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

    // Route::view('dashboard', 'dashboard')->name('dashboard'); 

    Route::get('/immobiliers', [RealStateController::class, 'immobilier_admin_page'])->name('immobilier_admin_page');
    Route::post('/ajouter_immobiliers', [RealStateController::class, 'add_immobilier'])->name('add_immobilier');
    Route::get('/gestion-immobiliers', [RealStateController::class, 'gestion_admin_page'])->name('gestion_admin_page');
    Route::get('/modifier-immobilier/{id}', [RealStateController::class, 'update_immobilier_admin_page'])->name('update_immobilier_admin_page');

    Route::post('/update-immobilier/{id}', [RealStateController::class, 'modifier_immobilier'])->name('modifier_immobilier');

    Route::get('/messages', [MessageController::class, 'messages_admin_page'])->name('messages_admin_page');
    Route::post('/add_message', [MessageController::class, 'add_message'])->name('add_message');
    Route::delete('/delete_msg/{id}', [MessageController::class, 'delete_msg'])->name('delete_msg');


    Route::view('profile', 'profile')->name('profile');

});








require __DIR__ . '/auth.php';
