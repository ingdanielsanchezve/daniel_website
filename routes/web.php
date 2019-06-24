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

Route::get('/', 'CvController@index');

Route::get('/{lang}', 'CvController@changeLanguage')->where(['lang' => 'es|en']);

Route::get('me', 'CvController@getAboutMeinfo');

Route::get('details', 'CvController@getDetailsInfo');

Route::get('experience', 'CvController@getExperienceInfo');

Route::get('education', 'CvController@getEducationInfo');

Route::get('certification', 'CvController@getCertificationInfo');

Route::get('recommendations', 'CvController@getRecommendationsInfo');

Route::get('skills', 'CvController@getSkillsInfo');

Route::get('portfolio', 'CvController@getPortfolioInfo');

Route::get('contact', 'CvController@getContactInfo');

