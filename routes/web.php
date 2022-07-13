<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Instagram\Page\PageCategoryController;
use App\Http\Controllers\Admin\InstagramPageController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[SiteController::class,'index'])->name('site.index');

Route::get('/explore',[SiteController::class,'explore'])->name('site.explore');

Route::get('/product/1',[SiteController::class,'product'])->name('site.product');




Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');

    Route::prefix('instagram')->group(function(){
        // Route::get('/',[InstagramPageController::class,'index'])->name('admin.instagram.index');
        Route::prefix('page')->group(function(){
            Route::get('/',[InstagramPageController::class,'categoryIndex'])->name('admin.instagram.page.index');
            // Route::get('/create',[InstagramPageController::class,'categoryCreate'])->name('admin.instagram.page.create');
            // Route::post('/store',[InstagramPageController::class,'categoryStore'])->name('admin.instagram.page.store');
            Route::prefix('category')->group(function(){
                Route::get('/',[PageCategoryController::class,'index'])->name('admin.instagram.page.category.index');
                Route::get('/create',[PageCategoryController::class,'create'])->name('admin.instagram.page.category.create');
                Route::post('/store',[PageCategoryController::class,'store'])->name('admin.instagram.page.category.store');
                Route::get('/edit/{instagramPageCategory}',[PageCategoryController::class,'edit'])->name('admin.instagram.page.category.edit');
                Route::put('/update/{instagramPageCategory}',[PageCategoryController::class,'update'])->name('admin.instagram.page.category.update');
                Route::delete('/delete/{instagramPageCategory}',[PageCategoryController::class,'destroy'])->name('admin.instagram.page.category.delete');


            });

        });

    });

});

