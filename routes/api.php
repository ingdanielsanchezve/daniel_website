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

Route::get('me/{lang}', 'CvController@getAboutMeinfo')->where(['lang' => 'es|en']);

Route::get('details/{lang}', 'CvController@getDetailsInfo')->where(['lang' => 'es|en']);

Route::get('experience/{lang}', 'CvController@getExperienceInfo')->where(['lang' => 'es|en']);

Route::get('education/{lang}', 'CvController@getEducationInfo')->where(['lang' => 'es|en']);

Route::get('certification/{lang}', 'CvController@getCertificationInfo')->where(['lang' => 'es|en']);

Route::get('recommendations/{lang}', 'CvController@getRecommendationsInfo')->where(['lang' => 'es|en']);

Route::get('skills/{lang}', 'CvController@getSkillsInfo')->where(['lang' => 'es|en']);

Route::get('portfolio/{lang}', 'CvController@getPortfolioInfo')->where(['lang' => 'es|en']);