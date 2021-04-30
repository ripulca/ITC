<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

// Route::group(['namespace'=>'App\Http\Controllers'], function ()
// {
//     Route::prefix('/news')->group(function(){
//         Route::get('/create','NewsController@create')->name('create');
//         Route::put('','NewsController@store')->name('store');
//         Route::get('/{newsID}','NewsController@index')->name('index');
//         Route::get('', 'NewsController@show')->name('show');
//         Route::get('/{newsID}/edit','NewsController@edit')->name('edit');
//         Route::post('/{newsID}','NewsController@update')->name('update');
//         Route::delete('/{newsID}','NewsController@destroy')->name('destroy');
//     });
// });

Route::resource('news', NewsController::class);