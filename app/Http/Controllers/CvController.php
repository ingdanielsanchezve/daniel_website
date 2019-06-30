<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;
use \App\{Profile, Education, Experiences, Certification, Recommendations, Languages, Portfolio, Skills, Contact};

class CvController extends Controller
{
    public function index(){

        return view('daniel', 
            [
                'profile'   => Profile::where('lang', App::getLocale())->first(),
                'education' => Education::where('lang', App::getLocale())->get(),
                'recommendations' => Recommendations::where('lang', App::getLocale())->get(),
                'experiences' => Experiences::where('lang', App::getLocale())->with('detail_experiences')->get(),
                'languages' => Languages::where('lang', App::getLocale())->get(),
                'certs' => Certification::get(),
                'portfolio' => Portfolio::get(),
                'skills' => Skills::get()
             ]
        );

    }

    public function changeLanguage($lang){

        App::setLocale($lang);

        return view('daniel', 
            [
                'profile'   => Profile::where('lang', App::getLocale())->first(),
                'education' => Education::where('lang', App::getLocale())->get(),
                'recommendations' => Recommendations::where('lang', App::getLocale())->get(),
                'experiences' => Experiences::where('lang', App::getLocale())->with('detail_experiences')->get(),
                'languages' => Languages::where('lang', App::getLocale())->get(),                
                'certs' => Certification::get(),
                'portfolio' => Portfolio::get(),
                'skills' => Skills::get()
             ]
        );

    }

    public function getProfile($lang){

        return Profile::whereLang($lang)
                      ->first();
    }

    public function getAboutMe($lang){

        return Profile::whereLang($lang)
                      ->select('picture', 'name', 'title', 'technologies', 'location', 'subtitle', 'linkedin', 'github', 'skype', 'cv_url')
                      ->first();
    }

    public function getDetails($lang){

        return Profile::whereLang($lang)
               ->select('birthdate', 'marital_status', 'nationality', 'skype', 'skype', 'phone', 'email', 'email', 'aboutme', 'aboutme_more1', 'aboutme_more2', 'aboutme_more3', 'aboutme_more4')
               ->first();
    }

    public function getExperiences($lang){

        return Experiences::whereLang($lang)->with('detail_experiences')->get();

    }

    public function getEducation($lang){

        return Education::whereLang($lang)->get();

    }

    public function getRecommendations($lang){

        return Recommendations::whereLang($lang)->get();

    }

    public function getLanguages($lang){

        return Languages::whereLang($lang)->get();

    }

    public function getCertifications(){

        return Certification::get();

    }

    public function getSkills(){

        return Skills::get();

    }


    public function getPortfolio(){

        return Portfolio::get();

    }

}
