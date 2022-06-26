<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResuneController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PackegesController;

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

Route::get('/', [UsersController::class, 'index'])->name('home');
Route::get('/create', [UsersController::class, 'create_user'])->name('user.create');
Route::get('/login', [UsersController::class, 'login_user'])->name('user.login');
Route::post('/user/store', [UsersController::class, 'store_user_account'])->name('user.store');


Route::POST('/show', [ResuneController::class, 'show']);
Route::POST('/store', [ResuneController::class, 'store']);
Route::get('/view', [ResuneController::class, 'showAll']);
Route::post('/edit', [ResuneController::class, 'Edit']);
Route::get('/delete', [ResuneController::class, 'Delete']);
Route::post('/update', [ResuneController::class, 'Update']);

Route::get('/map', [ResuneController::class, 'map']);

Route::prefix('api')->group(function () {
    Route::get('/postlocation', [ResuneController::class, 'postLocation']);
    Route::get('/login', [UsersController::class, 'user_login']);
    

});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [UsersController::class, 'Dashboard'])->name('admin.dashboard');
    Route::get('/user/add', [UsersController::class, 'add_usesr'])->name('admin.user.add');
    Route::get('/user/view', [UsersController::class, 'view_user'])->name('admin.user.view');
    Route::get('/packeges/add', [PackegesController::class, 'create'])->name('admin.packeges.add');
    Route::post('/packeges/store', [PackegesController::class, 'store'])->name('admin.packeges.store');
    Route::get('/packeges/View', [PackegesController::class, 'index'])->name('admin.packeges.view');
    Route::get('/packeges/Delete', [PackegesController::class, 'delete'])->name('admin.packeges.delete');
    Route::get('/packeges/Edit', [PackegesController::class, 'edit'])->name('admin.packeges.edit');
    Route::Post('/packeges/Update', [PackegesController::class, 'update'])->name('admin.packeges.update');


});


