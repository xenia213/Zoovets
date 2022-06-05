<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\VetController;
use App\Http\Controllers\VetCsvController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserCsvController;
use App\Http\Controllers\PostViewController;


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


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/pokazatel', [
        App\Http\Controllers\PokazatelController::class, 'show'
        ])->name('pokazatel');
   
    Route::get('/news', [
        App\Http\Controllers\PostViewController::class, 'index'
        ])->name('news');
    Route::get('/news/{id}', [
        App\Http\Controllers\PostViewController::class, 'one'
        ])->name('news_one');
    
});


 
Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('csv', CsvController::class);
    Route::resource('usercsv', UserCsvController::class);
   
    Route::get('/new', [
        App\Http\Controllers\VetCsvController::class, 'Csv_drop'
        ])->name('csv-new');

    Route::get('/all_user', [
        App\Http\Controllers\Admin\HomeController::class, 'all_user'
        ])->name('all_user');
    Route::get('/csv_user', [
        App\Http\Controllers\UserController::class, 'index'
        ])->name('csv_user');
    
    
});

