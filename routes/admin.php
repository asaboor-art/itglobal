<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('pages')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('admin.pages.index');
    Route::get('/ajax', [PageController::class, 'render'])->name('admin.pages.ajax');
    Route::get('/create',[PageController::class, 'create'])->name('admin.pages.create');
    Route::get('/edit/{id}',[PageController::class, 'edit'])->name('admin.pages.edit');
    Route::get('/{id}',[PageController::class, 'get'])->name('admin.pages.page');
    Route::post('/',[PageController::class, 'store'])->name('admin.pages.store');
    Route::put('/update/{id}',[PageController::class, 'update'])->name('admin.pages.update');
    Route::delete('/delete/{id}',[PageController::class, 'destroy'])->name('admin.pages.destroy');
});

Route::prefix('layouts')->group(function(){
    Route::get('/select',[LayoutController::class, 'getLayoutPublic'])->name('admin.layouts.select');
});

Route::prefix('headers')->group(function(){
    Route::get('/',[HeaderController::class, 'index'])->name('admin.headers.index');
    Route::get('/ajax', [HeaderController::class, 'render'])->name('admin.headers.ajax');
    Route::get('/create',[HeaderController::class, 'create'])->name('admin.headers.create');
    Route::post('/',[HeaderController::class, 'store'])->name('admin.headers.store');
    Route::get('/{id}',[HeaderController::class, 'get'])->name('admin.headers.header');
    Route::get('/edit/{id}',[HeaderController::class, 'edit'])->name('admin.headers.edit');
    Route::put('/update/{id}',[HeaderController::class, 'update'])->name('admin.headers.update');
    Route::delete('/delete/{id}',[HeaderController::class, 'destroy'])->name('admin.headers.destroy');
});

Route::prefix('footers')->group(function(){
    Route::get('/',[FooterController::class, 'index'])->name('admin.footers.index');
    Route::get('/ajax', [FooterController::class, 'render'])->name('admin.footers.ajax');
    Route::get('/create',[FooterController::class, 'create'])->name('admin.footers.create');
    Route::post('/',[FooterController::class, 'store'])->name('admin.footers.store');
    Route::get('/{id}',[FooterController::class, 'get'])->name('admin.footers.header');
    Route::get('/edit/{id}',[FooterController::class, 'edit'])->name('admin.footers.edit');
    Route::put('/update/{id}',[FooterController::class, 'update'])->name('admin.footers.update');
    Route::delete('/delete/{id}',[FooterController::class, 'destroy'])->name('admin.footers.destroy');
});
// Inner dashboard
// Route::get('/ajax', [DashboardController::class, 'index'])->name('admin.dashboard.ajax');
// Route::get('/registrations/month', [DashboardController::class, 'getRegistrationsPreMonth'])->name('admin.dashboard.registration.month');
// // General
// Route::get('/newsletters/subscribe', [DashboardController::class, 'getNewsletterSubscriptions'])->name('admin.newsletter.subscribe');

Route::get('/roles', [\App\Http\Controllers\BaseController::class, 'getAllRoles'])->name('admin.roles');
Route::get('/admin/messages', function () {
    return redirect()->route('home');
})->name('admin.messages.index');
//Companies

