<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;
use \App\Profile;
use \App\Education;
use \App\Experiences;
use \App\Certification;

class CvController extends Controller
{
    public function index(){

        return view('daniel', 
            [
                'profile'   => Profile::where('lang', App::getLocale())->first(),
                'education' => Education::where('lang', App::getLocale())->get(),
                'certs' => Certification::get(),
                'experiences' => Experiences::where('lang', App::getLocale())->get(),
             ]
        );

    }

    public function changeLang($lang){

        App::setLocale($lang);

        return view('daniel', 
            [
                'profile'   => Profile::where('lang', App::getLocale())->first(),
                'education' => Education::where('lang', App::getLocale())->get(),
                'certs' => Certification::get(),
                'experiences' => Experiences::where('lang', App::getLocale())->get(),
             ]
        );

    }

}
