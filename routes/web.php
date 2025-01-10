<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RealStateController;
use Illuminate\Support\Facades\Route;


Route::get( '/nos-immobiliers' , [  RealStateController::class , 'index' ]  ) -> name('nos-immobiliers-page');
// Route::get('/immobiliers-details', [RealStateController::class, 'index'])->name('immobiliers-details'); 

Route::get('/contact', [CompanyController::class, 'contact_page'])->name('contact');

Route::view('/', 'welcome') -> name('welcome') ;



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


    

require __DIR__.'/auth.php';
