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

//contacts
Route::get('contacts/create','ContactController@create');
Route::post('contacts/create','ContactController@store');
Route::get('contacts/show','ContactController@show');


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

//dlevel
Route::get('dlevel/create','DiplomalevelController@create');
Route::post('dlevel/create','DiplomalevelController@store');
Route::get('dlevel/show','DiplomalevelController@show');

//dglevel
Route::get('dglevel/create','DegreelevelController@create');
Route::post('dglevel/create','DegreelevelController@store');
Route::get('dglevel/show','DegreelevelController@show');

//Masterslevel
Route::get('mlevel/create','MasterslevelController@create');
Route::post('mlevel/create','MasterslevelController@store');
Route::get('mlevel/show','MasterslevelController@show');

//Phdlevel
Route::get('plevel/create','PhdlevelController@create');
Route::post('plevel/create','PhdlevelController@store');
Route::get('plevel/show','PhdlevelController@show');

//Mycv
Route::get('mycv/show','MycvController@index');

//experiences
Route::get('experience/create','ExperienceController@create');
Route::post('experience/create','ExperienceController@store');
Route::get('experience/show','ExperienceController@show');

//interests
Route::get('interests/create','InterestsController@create');
Route::post('interests/create','InterestsController@store');
Route::get('interests/show','InterestsController@show');

//skills
Route::get('skills/create','SkillsController@create');
Route::post('skills/create','SkillsController@store');
Route::get('skills/show','SkillsController@show');

//referees
Route::get('referees/create','RefereesController@create');
Route::post('referees/create','RefereesController@store');
Route::get('referees/show','RefereesController@show');

//researches
Route::get('research/create','ResearchesController@create');
Route::post('research/create','ResearchesController@store');
Route::get('research/show','ResearchesController@show');


//professional affliations
Route::get('professionalaffiliation/create','ProfessionalAffliationController@create');
Route::post('professionalaffiliation/create','ProfessionalAffliationController@store');
Route::get('professionalaffiliation/show','ProfessionalAffliationController@show');

//awards
Route::get('awards/create','AwardsController@create');
Route::post('awards/create','AwardsController@store');
Route::get('awards/show','AwardsController@show');