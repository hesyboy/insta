<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

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




