<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KFoldCrossController;
use App\Http\Controllers\KFoldCrossResultController;
use App\Http\Controllers\FuzzyKMeansController;
use App\Http\Controllers\FuzzyKMeansResultController;
use App\Http\Controllers\FKMCalculationController;
use App\Http\Controllers\KMeansController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [UserController::class, 'index']);

Auth::routes();

//Route::resource('dataset','App\Http\Controllers\UserController');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Home
// Route::get("/home", [HomeController::class, 'index'])->name("home");
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Dataset
// Route::get('/dataset', 'App\Http\Controllers\RantingController@index');
// Route::get('/create','App\Http\Controllers\RantingController@create');
Route::post('/store','App\Http\Controllers\UserController@store');
Route::get('/delete/{id}','App\Http\Controllers\UserController@destroy');
Route::put('/{id}','App\Http\Controllers\UserController@update')->name('update');
Route::get('dataset/{id}/edit','App\Http\Controllers\UserController@edit')->name('edit');
Route::post('dataset/{id}','App\Http\Controllers\UserController@update');

// Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
// Route::post('/login', 'App\Http\Controllers\AuthController@login');






