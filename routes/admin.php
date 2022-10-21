<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CategoryController;

use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/ajax', [CategoryController::class, 'renderTable'])->name('admin.categories.ajax');
    Route::get('/create',[CategoryController::class, 'create'])->name('admin.category.create');
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

