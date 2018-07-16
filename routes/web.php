<?php

use App\Http\Middleware\CheckAdmin;

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

Route::get('/','SiteController@index');

//Route::get('/', function () {
//    return view('welcome');
//});



/**
 * Admin Panel Routes
 */
Route::get('/administrator', 'AdminLoginController@index');
Route::post('/admin/authenticate', 'AdminLoginController@verifyUser');

Route::group(['prefix' => 'admin', 'middleware' => [CheckAdmin::class]], function() {

    Route::get('/logout', 'AdminController@logout');
    Route::get('/', 'AdminController@index');

});

/**
 * Admin Panel Routes
 */

