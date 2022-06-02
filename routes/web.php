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


Route::get('/', 'PageController@showCars');
Route::get('/view', 'PageController@showCarsView');
Route::get('/index', 'PageController@showCars');
Route::get('/detail/{id}', 'PageController@detail');
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');
Route::get('/register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');
Route::get('/admin', 'RoleController@admin');
Route::get('/addCar', 'AdminController@create');
Route::post('/addCar', 'AdminController@addCar');
Route::get('/edit', 'RoleController@editCar');
Route::get('/deleteCar/{id}', 'AdminController@deleteCar');
Route::get('modeCar/{id}', 'RoleController@modCar');
Route::post('modeCar/{id}', 'AdminController@modCar');
Route::get('/editUser', 'RoleController@editUser');
Route::get('/deleteUser/{id}', 'AdminController@deleteUser');
Route::get('modeUser/{id}', 'RoleController@modUser');
Route::post('modeUser/{id}', 'AdminController@modUser');

Route::get('/addDoc', 'RoleController@createDoc');
Route::post('/addDoc', 'AdminController@createDoc');

Route::get('/editDoc', 'RoleController@editDoc');
Route::get('/deleteDoc/{id}', 'AdminController@deleteDoc');
Route::get('modeDoc/{id}', 'RoleController@modDoc');
Route::post('modeDoc/{id}', 'AdminController@modDoc');

Route::post('detail/reservation/{id}', 'RoleController@reserve');

require __DIR__.'/auth.php';
