<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\PageBannerController;
use App\Http\Controllers\Backend\PageElementController;
use App\Http\Controllers\Backend\AboutElementController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductElementController;
use App\Http\Controllers\Backend\ExpertisePageController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\CsrPageController;
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

    //admin profile route part controller group------- 02
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
    //Page Element route part controller group------- 04
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

    //about Element route part controller group------- 05
    Route::controller(AboutElementController::class)->group(function () {
        // about story element 
        Route::get('/about/story/', 'index')->name('about.story');
        Route::post('/about/story/store', 'store')->name('about.story.store');
        Route::post('/about/story/update/{id}', 'update')->name('about.story.update');
    });

    //product route part controller group------- 06
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('product');
        Route::post('/product/store', 'store')->name('product.store');
        Route::post('/product/update/{id}', 'update')->name('product.update');
        Route::get('/product/manage', 'manage')->name('product.manage');
        Route::get('/product/edit/{id}', 'edit')->name('product.edit');
        Route::get('/product/delete/{id}', 'delete')->name('product.delete');
    });

    //product element route part controller group------- 07
    Route::controller(ProductElementController::class)->group(function () {
        // product Image part 
        Route::get('/product/image/element/', 'productImage')->name('product.image.element');
        Route::get('/product/image/manage/element/', 'productImageManage')->name('product.manage.image.element');
        Route::post('/product/image/store/element/', 'productImageStore')->name('product.image.store');
        Route::get('/product/image/delete/{id}', 'productImageDelete')->name('product.image.delete');

        // Product spacific part 
        Route::get('/product/spacific/element/', 'productSpacific')->name('product.spacific.element');
        Route::get('/product/spacific/manage/element/', 'productSpacificManage')->name('product.manage.spacific.element');
        Route::post('/product/spacific/store/element/', 'productSpacificStore')->name('product.spacific.store');
        Route::post('/product/spacific/update/element/{id}', 'productSpacificUpdate')->name('product.spacific.update');
        Route::get('/product/spacific/edit/{id}', 'productSpacificEdit')->name('product.spacific.edit');
        Route::get('/product/spacific/delete/{id}', 'productSpacificDelete')->name('product.spacific.delete');

    });
    //Career route part controller group------- 07
    Route::controller(CareerController::class)->group(function () {
        // career part 
        Route::get('/career', 'index')->name('career');
        Route::post('/career/store', 'store')->name('career.store');
        Route::post('/career/update/{id}', 'update')->name('career.update');
        Route::get('/career/manage', 'manage')->name('career.manage');
        Route::get('/career/edit/{id}', 'edit')->name('career.edit');
        Route::get('/career/delete/{id}', 'delete')->name('career.delete');
        Route::get('/career/status/{id}', 'status')->name('career.status');

    });

    //Expertise page route part controller group------- 08
    Route::controller(ExpertisePageController::class)->group(function () {
        // career part 
        Route::get('/expertise/element', 'index')->name('expertise.element');
        Route::post('/expertise/element/store', 'store')->name('expertise.element.store');
        Route::get('/expertise/element/manage', 'manage')->name('expertise.element.manage');
        Route::post('/expertise/element/update/{id}', 'update')->name('expertise.element.update');
        Route::get('/expertise/element/edit/{id}', 'edit')->name('expertise.element.edit');
        Route::get('/expertise/element/delete/{id}', 'delete')->name('expertise.element.delete');
        Route::get('/expertise/element/status/{id}', 'status')->name('expertise.element.status');

    });
    //Csr page route part controller group------- 09
    Route::controller(CsrPageController::class)->group(function () {
        // casr common part 
        Route::get('/csr/common', 'csrCommon')->name('csr.common');
        Route::post('/csr/common/store', 'csrCommonStore')->name('csr.common.store');
        Route::post('/csr/common/update/{id}', 'csrCommonUpdate')->name('csr.common.update');
        
        // csr raw meterial part

        Route::get('/csr/raw_maretial', 'csrRaw')->name('csr.raw_material');
        Route::post('/csr/raw_maretial/store', 'csrRawStore')->name('csr.raw_material.store');
        Route::post('/csr/raw_maretial/update/{id}', 'csrRawUpdate')->name('csr.raw_material.update');
        // csr pre-production part

        Route::get('/csr/pre_production', 'csrPreProduction')->name('csr.pre_production');
        Route::post('/csr/pre_production/store', 'csrPreProductionStore')->name('csr.pre_production.store');
        Route::post('/csr/pre_production/update/{id}', 'csrPreProductionUpdate')->name('csr.pre_production.update');
        // csr production part

        Route::get('/csr/production', 'csrProduction')->name('csr.production');
        Route::post('/csr/production/store', 'csrProductionStore')->name('csr.production.store');
        Route::post('/csr/production/update/{id}', 'csrProductionUpdate')->name('csr.production.update');


    });


});
// Home controller backend routing part end 



require __DIR__.'/auth.php';

include('frontend.php');

