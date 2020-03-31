<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;
use \App\{Profile, Education, Experiences, Certification, Recommendations, Languages, Portfolio, Skills, Contact};
use Jenssegers\Agent\Agent;

class CvController extends Controller
{
    public function index(){
        
        $agent = new Agent();

        return view('daniel', ['desktop' => $agent->isDesktop()]);

    }

    public function changeLanguage($lang){

        $agent = new Agent();
        
        App::setLocale($lang);

        return view('daniel', ['desktop' => $agent->isDesktop()]);

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

    public function getSkillsLanguages($lang){

        return ['skills' => Skills::get(), 'languages' => Languages::whereLang($lang)->get()];

    }

    public function getCertifications(){

        return Certification::get();

    }


    public function getPortfolio(){

        return Portfolio::get();

    }

}
