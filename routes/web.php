<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Artisan;


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

Route::get('/',[SitePageController::class,'renderMainPage'])->name('home');
Route::get('/pages/{page}',[SitePageController::class,'renderSitePages'])->name('site-pages');

Route::get('/error', function(){
    return view('errors.404');
});



// NewsLetter
Route::post('/newsletter',[BaseController::class,'newsletterSubscription'])->name('newsletter.subscribe');
Route::post('/contact-us',[BaseController::class,'saveContactForm'])->name('contact-us');
// Custom Form Posting

Route::post('/custom-form/get-a-quote',[SitePageController::class,'storeCustomForm'])->name('custom-form-posting');
require __DIR__ . '/auth.php';

Route::prefix('admin')->middleware(['auth:sanctum'])->group(function () {
    require __DIR__ . '/admin.php';
});

Route::prefix('developer')->group(function () {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
    Route::get('/artisan', function () {
        Artisan::call("view:cache");
        Artisan::call("view:clear");
        Artisan::call("config:cache");
        Artisan::call("config:clear");
        Artisan::call("cache:clear");

        dd('clear');
    });
});


// Static Pages
Route::prefix('pages')->group(function () {
    Route::get('/{slug}', [SitePageController::class, 'page'])->name('page');
});

// Blogs

Route::prefix('blogs')->group(function () {
    Route::get('/',function(){
        return view('blogs.blogs');
    })->name('blogs');

    Route::get('/{slug}',function(){
        return view('blogs.blog-detail');
    })->name('blog');
});

// Services

Route::prefix('services')->group(function () {
    Route::get('/',function(){
        return view('pages.services');
    })->name('services');
    Route::get('/{slug}',function($slug){
        return view('pages.service-detail',[
            'service' => $slug,
            'title' => str_replace('-',' ',strtoupper($slug)),
        ]);
    })->name('service');
});