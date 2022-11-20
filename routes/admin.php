<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('pages')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('admin.pages.index');
    Route::get('/ajax', [PageController::class, 'renderTable'])->name('admin.pages.ajax');
    Route::get('/create',[PageController::class, 'create'])->name('admin.pages.create');
    Route::post('/',[PageController::class, 'store'])->name('admin.pages.store');
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

