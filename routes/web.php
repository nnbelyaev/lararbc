<?php

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', 'IndexController@index')->name('main');
    Auth::routes();
    Route::get('/{rubric}/{page}', 'RubricController@listing')->where(['rubric' => '[a-z0-9\-]+', 'page' => '[0-9]+'])->name('rubric.listing');
    Route::get('/{rubric}', 'RubricController@index')->where('rubric', '[a-z0-9\-]+')->name('rubric');
    Route::get('/{rubric}/{publication}', 'PublicationController@show')->where(['rubric' => '[a-z0-9\-]+', 'publication' => '[a-z0-9\-\.]+'])->name('publication.show');
    Route::get('/home', 'HomeController@index')->name('home');
});








