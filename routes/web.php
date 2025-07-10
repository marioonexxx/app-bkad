<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomepageController::class, 'index'])->name('index');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// ROLE ADMIN

Route::middleware('auth','verified','Administrator')->group(function(){

    Route::get('/dashboard',[AdministratorController::class, 'index'])->name('dashboard');

});


Route::middleware('auth','verified','Bendahara')->group(function(){
    Route::get('/dashboard-bendahara-opd',[BendaharaController::class, 'index'])->name('bendahara.dashboard');
});

require __DIR__.'/auth.php';
