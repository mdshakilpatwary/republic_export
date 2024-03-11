<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\PageBannerController;
use App\Http\Controllers\Backend\PageElementController;
use App\Http\Controllers\Backend\AboutElementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This route used for only backend manage
|
*/



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth','role:Admin','verified'])->name('dashboard');

// Route::middleware('auth','role:Admin')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::middleware('guest')->group(function () {
    
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin-login', 'login')->name('admin.login');
    });
    
});

// Home controller backend routing part start 
Route::middleware('auth','role:Admin')->group(function () {
 
    // Home route part controller group------- 01
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin/logout', 'logout')->name('admin.logout');
        Route::get('/site/info', 'siteInfo')->name('site.info');
        Route::post('/site/info/update/{type}', 'siteInfoUpdate')->name('site.info.update');
    });

    //admin profile route part controller group------- 01
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/admin/profile', 'index')->name('admin.profile');
        Route::post('/admin/profile/update/{id}', 'update')->name('admin.profile.update');
        Route::post('/change/password/{id}', 'changePassword')->name('change.password');
    });
    //common header banner route part controller group------- 03
    Route::controller(PageBannerController::class)->group(function () {
        Route::get('/header/info', 'index')->name('header.info');
        Route::post('/header/info/store', 'store')->name('header.info.store');
        Route::get('/header/info/manage', 'manage')->name('header.info.manage');
        Route::get('/header/info/edit/{id}', 'edit')->name('header.info.edit');
        Route::post('/header/info/update/{id}', 'update')->name('header.info.update');
        Route::get('/header/info/delete/{id}', 'delete')->name('header.info.delete');

    });
    //Page Element route part controller group------- 03
    Route::controller(PageElementController::class)->group(function () {
        // home industrial element 
        Route::get('/home/industrial/element', 'index')->name('home.industrial.element');
        Route::post('/home/industrial/element/store', 'store')->name('home.industrial.store');
        Route::post('/home/industrial/element/update/{id}', 'update')->name('home.industrial.update');
       
        // home client element 

        Route::get('/home/client/element', 'client')->name('home.client.element');
        Route::post('/home/client/element/store', 'clientStore')->name('home.client.element.store');
        Route::post('/home/client/element/update/{id}', 'clientUpdate')->name('home.client.element.update');


    });

    //about Element route part controller group------- 03
    Route::controller(AboutElementController::class)->group(function () {
        // about story element 
        Route::get('/about/story/', 'index')->name('about.story');
        Route::post('/about/story/store', 'store')->name('about.story.store');
        Route::post('/about/story/update/{id}', 'update')->name('about.story.update');
    });

});
// Home controller backend routing part end 



require __DIR__.'/auth.php';

include('frontend.php');

