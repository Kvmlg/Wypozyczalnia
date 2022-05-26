<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [PageController::class, 'showCars']);
Route::get('/view', [PageController::class, 'showCarsView']);
Route::get('/index', [PageController::class, 'showCars']);
Route::get('/detail/{id}', [PageController::class, 'detail']);
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');
Route::get('/register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');
Route::get('/admin', [RoleController::class, 'admin']);
Route::get('/addCar', 'AdminController@create');
Route::post('/addCar', 'AdminController@addCar');


require __DIR__.'/auth.php';
