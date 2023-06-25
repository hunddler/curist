<?php

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



Route::get('/', [App\Http\Controllers\AdminController::class, 'HomePage']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/dashboard', function () {
    return view('admin/dashboard/index');
});


Route::get('admin/page-content', [App\Http\Controllers\AdminController::class, 'Homesection']);
Route::get('admin/page-content-tourist', [App\Http\Controllers\AdminController::class, 'Touristsection']);
Route::get('admin/page-content-multifunction', [App\Http\Controllers\AdminController::class, 'MULTIFUNCTION']);

Route::get('admin/page-content-team', [App\Http\Controllers\AdminController::class, 'SectionTeam']);
Route::get('admin/page-content-footer', [App\Http\Controllers\AdminController::class, 'DownloadSection']);

Route::post('add/homesection', [App\Http\Controllers\AdminController::class, 'AddHomesection']);
Route::post('add/tourist', [App\Http\Controllers\AdminController::class, 'AddTouristsection']);
Route::post('add/multifunction', [App\Http\Controllers\AdminController::class, 'AddMultifunction']);

Route::post('add/team', [App\Http\Controllers\AdminController::class, 'AddTeam']);
Route::post('add/editteam', [App\Http\Controllers\AdminController::class, 'EditTeam']);
Route::post('add/downloadsection', [App\Http\Controllers\AdminController::class, 'AddDownloadsection']);
