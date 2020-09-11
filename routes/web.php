<?php

use App\Http\Controllers\adminCategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::post('categories', 'adminCategoriesController');
Route::get('/Dashboard', 'DashboardController@index')->name('admin.dashboard');
Route::get('/products', 'adminProductsController@index');
Route::get('/add/products', 'adminProductsController@create')->name('product.create');
Route::get('/add/category', 'adminCategoriesController@create')->name('category.create');
Route::get('/teamMembers', 'adminTeamMembersController@create')->name('teamMember.create');
Route::get('/services', 'adminServicesController@create')->name('services.create');
Route::get('category/{id}', ' adminCategoriesController@show')->name('show');
Route::get('/', 'PublicController@index')->name('home');
Route::get('/pro', 'PublicController@products')->name('pro');





Route::resource('products', 'adminProductsController');
Route::resource('categories', 'adminCategoriesController');
Route::resource('services', 'adminServicesController');
Route::resource('dashboard', 'DashboardController');
Route::resource('teamMembers', 'adminTeamMembersController');
Route::resource('Public', 'PublicController');
Route::resource('Project', 'ProjectController');