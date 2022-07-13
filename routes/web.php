<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Instagram\Page\PageCategoryController;
use App\Http\Controllers\Admin\Instagram\Page\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Panel\PageController as PanelPageController;
use App\Http\Controllers\Panel\PanelController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





Route::get('/',[SiteController::class,'index'])->name('site.index');

Route::get('/explore',[SiteController::class,'explore'])->name('site.explore');

Route::get('/product/1',[SiteController::class,'product'])->name('site.product');




Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');

    Route::prefix('instagram')->group(function(){
        // Route::get('/',[InstagramPageController::class,'index'])->name('admin.instagram.index');
        Route::prefix('page')->group(function(){
            Route::get('/',[PageController::class,'index'])->name('admin.instagram.page.advertise.index');
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


    Route::prefix('user')->group(function(){
        Route::get('/',[UserController::class,'index'])->name('admin.user.index');


    });

});






Route::prefix('panel')->namespace('Panel')->group(function(){
    Route::get('/',[PanelController::class,'index'])->name('panel.index');

    Route::prefix('page')->group(function(){
        Route::get('/',[PanelPageController::class,'index'])->name('panel.page.index');
        Route::get('/create',[PanelPageController::class,'create'])->name('panel.page.create');
    });

});




require __DIR__.'/auth.php';
