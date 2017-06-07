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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('personaldetails/create','PersonalDetailsController@create');
Route::post('personaldetails/create','PersonalDetailsController@store');
Route::get('personaldetails/show','PersonalDetailsController@show');

Route::get('educationdetails/create','EducationDetailsController@create');
Route::post('educationdetails/create','EducationDetailsController@store');
Route::get('educationdetails/show','EducationDetailsController@show');

//oleve
Route::get('olevel/create','OlevelController@create');
Route::post('olevel/create','OlevelController@store');
Route::get('olevel/show','OlevelController@show');


//alevel
Route::get('alevel/create','AlevelController@create');
Route::post('alevel/create','AlevelController@store');
Route::get('alevel/show','AlevelController@show');

//clevel
Route::get('clevel/create','CertificatelevelController@create');
Route::post('clevel/create','CertificatelevelController@store');
Route::get('clevel/show','CertificatelevelController@show');

Route::get('dlevel/create','DiplomalevelController@create');
Route::post('dlevel/create','DiplomalevelController@store');
Route::get('dlevel/show','DiplomalevelController@show');


