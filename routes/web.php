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

<<<<<<< Updated upstream
Route::get('/',[SitePageController::class,'renderMainPage'])->name('home');
Route::get('/pages/{page}',[SitePageController::class,'renderSitePages'])->name('site-pages');


=======
Route::get('/',function(){
    return view('cbc_web.index');
})->name('home');
>>>>>>> Stashed changes



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
