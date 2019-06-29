<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;
use \App\{Profile, Education, Experiences, Certification, Recommendations, Languages, Portfolio, Skills, ContactInfo};

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

    public function getAboutMeinfo($lang){

        return Profile::whereLang($lang)
                      ->select('picture', 'name', 'title', 'technologies', 'location', 'subtitle', 'linkedin', 'github', 'skype')
                      ->first();
    }

    public function getDetailsInfo($lang){

        return Profile::whereLang($lang)
               ->select('birthdate', 'marital_status', 'nationality', 'skype', 'skype', 'phone', 'email', 'email', 'aboutme', 'aboutme_more1', 'aboutme_more2', 'aboutme_more3', 'aboutme_more4')
               ->first();
    }

    public function getExperienceInfo(){

        return Experiences::where('lang', App::getLocale())->with('detail_experiences')->get();

    }

    public function getEducationInfo(){

        return Education::where('lang', App::getLocale())->get();

    }

    public function getRecommendationsInfo(){

        return Recommendations::where('lang', App::getLocale())->get();

    }

    public function getCertificationInfo(){

        return Certification::get();

    }

    public function getSkillsInfo(){

        return Skills::get();

    }

    public function getPortfolioInfo(){

        return Portfolio::get();

    }

    public function getContactInfo(){

        return ContactInfo::get();

    }



}
