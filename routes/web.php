<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\PageController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('compare', [PageController::class , 'compare'])->name('compare');
Route::get('modal', [PageController::class , 'index'])->name('modalShow');
// Route::get('filter ', [PageController::class , 'index'])->name('modalShow');
Route::get('modal', [PageController::class , 'index'])->name('modalShow');
Route::post('modal', [PageController::class , 'store'])->name('modalStore');
Route::post('modaltwo', [PageController::class , 'removeCart'])->name('cartRemove');
Route::get('/', [PageController::class , 'getSell'])->name('home');
Route::post('search',[ PageController::class , 'search'])->name('search');
Route::get('catagory',[ PageController::class , 'catagory'])->name('catagory');
Route::get('/test', function () {
    return view('layouts.guest');
});
Route::middleware(['auth'])->group(function () {
    Route::resource('unit', UnitController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
require __DIR__.'/auth.php';