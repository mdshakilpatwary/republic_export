<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This route used for only backend manage
|
*/

Route::get('/', function () {
    return view('welcome');
});

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
    });
    //admin profile route part controller group------- 01
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/admin/profile', 'index')->name('admin.profile');
        Route::post('/change/password/{id}', 'changePassword')->name('change.password');
    });

});
// Home controller backend routing part end 

require __DIR__.'/auth.php';
