<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::redirect('/ky-tu-dac-biet', '/vi-vn/ki-tu-dac-biet.html', 301);
Route::get('/vi-vn/{slug}.html', 'PageController@show')
    ->where('slug', '[A-Za-z0-9-]+')
    ->name('pages.show');
Route::get('/', 'HomeController@index');
Route::get('/vi-vn/ki-tu-dac-biet', 'PageController@ktdb');
Route::post('/ajax-get-perfect-name', 'AjaxController@index');

Route::prefix('admin')->group(function () {
    Route::resources([
        'categories' => 'CategoryController',
        'posts' => 'PostController',
        'ranks' => 'RankController',
        'users' => 'UserController',
        'roles' => 'RoleController',
    ]);

});