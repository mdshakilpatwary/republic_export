<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\ViewFrontendController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend route start 

Route::controller(ViewFrontendController::class)->group(function () {
    Route::get('/', 'homepage')->name('homepage');
    Route::get('/about', 'aboutpage')->name('about.page');
    Route::get('/product/{id}', 'productSinglePage')->name('product.single');
    Route::get('/our/product', 'productPage')->name('our.product');

});

// Frontend route end 

?>
