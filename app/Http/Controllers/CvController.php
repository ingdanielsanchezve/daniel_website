<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;
use \App\Profile;
use \App\Education;
use \App\Experiences;
use \App\Certification;
use \App\Recommendations;
use \App\Languages;
use \App\Portfolio;
use \App\Skills;

class CvController extends Controller
{
    public function index(){

        return view('daniel', 
            [
                'profile'   => Profile::where('lang', App::getLocale())->first(),
                'education' => Education::where('lang', App::getLocale())->get(),
                'recommendations' => Recommendations::where('lang', App::getLocale())->get(),
                'certs' => Certification::get(),
                'experiences' => Experiences::where('lang', App::getLocale())->with('detail_experiences')->get(),
                'languages' => Languages::where('lang', App::getLocale())->get(),
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
                'certs' => Certification::get(),
                'experiences' => Experiences::where('lang', App::getLocale())->with('detail_experiences')->get(),
                'languages' => Languages::where('lang', App::getLocale())->get(),
                'portfolio' => Portfolio::get(),
                'skills' => Skills::get()
             ]
        );

    }

}
