<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profile/{lang}', 'CvController@getProfile')->where(['lang' => 'es|en']);

Route::get('me/{lang}', 'CvController@getAboutMe')->where(['lang' => 'es|en']);

Route::get('details/{lang}', 'CvController@getDetails')->where(['lang' => 'es|en']);

Route::get('experience/{lang}', 'CvController@getExperiences')->where(['lang' => 'es|en']);

Route::get('education/{lang}', 'CvController@getEducation')->where(['lang' => 'es|en']);

Route::get('recommendations/{lang}', 'CvController@getRecommendations')->where(['lang' => 'es|en']);

Route::get('skills_languages/{lang}', 'CvController@getSkillsLanguages')->where(['lang' => 'es|en']);

Route::get('certification', 'CvController@getCertifications');

Route::get('portfolio', 'CvController@getPortfolio');