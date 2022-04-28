<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
//use App\Http\Controllers\Admin\EmployeeEducationsController;


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

require __DIR__.'/auth.php';

/**
 * Admin Routes
*/
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {


    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');


    //Route::get('/shop', [ProductController::class, 'index'])->name('shop');
    //Route::get('/shop/{id}', [ProductController::class, 'show'])->name('shop.product');

});