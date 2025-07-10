<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PpkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SppBjController;
use App\Http\Controllers\SppUpController;
use App\Http\Controllers\VerifikatorController;
use App\Models\Sppbj;
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
    Route::get('/bendahara-spp-up', [SppUpController::class, 'index'])->name('spp-up.index');
    Route::get('/bendahara-spp-bj',[SppBjController::class,'index'])->name('spp-bj.index');
    Route::post('/bendahara-spp-bj',[SppBjController::class,'store'])->name('spp-bj.store');
    Route::delete('/bendahara-spp-bj/{id}',[SppBjController::class, 'destroy'])->name('spp-bj.destroy');
    Route::put('/bendahara-spp-bj/{id}',[SppBjController::class, 'update'])->name('spp-bj.update');
});


Route::middleware('auth','verified','PPK')->group(function(){
    Route::get('/dashboard-ppk-opd',[PpkController::class, 'index'])->name('ppk.dashboard');
    Route::get('/ppk-spp-bj',[SppBjController::class, 'index_ppk'])->name('ppk.spp-bj.index');
    Route::post('/ppk-spp-bj/{id}',[SppBjController::class, 'reject'])->name('ppk.spp-bj.reject');
    Route::put('/ppk-spp-bj/create-spm/{id}',[SppBjController::class, 'create_spm'])->name('ppk.spp-bj.create_spm');
    Route::get('/ppk-pengajuansp2d',[SppBjController::class, 'index_pengajuan_sp2d'])->name('ppk.spp-bj.pengajuan_sp2d');


});


Route::middleware('auth','verified','Verifikator')->group(function(){

    Route::get('dashboard-verifikator',[VerifikatorController::class, 'index'])->name('verifikator.dashboard');
    Route::get('verifikator/pengajuan-sp2d',[VerifikatorController::class, 'index_pengajuan_sp2d'])->name('verifikator.pengajuan_sp2d');


});

require __DIR__.'/auth.php';
