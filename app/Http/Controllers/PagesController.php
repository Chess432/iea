<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }
    public function web_and_app(){
        return view('pages.services.web-and-app-development');
    }


    public function custom_software(){
        return view('pages.services.custom-software');
    }

    public function blendedLearning(){
        return view('pages.services.blended-learning');
    }

    public function customContentDevelopment(){
        return view('pages.services.custom-content-development');
    }

    public function flashToHtml5(){
        return view('pages.services.flash-to-html5');
    }

    public function gamification(){
        return view('pages.services.gamification');
    }

    public function learningManagementSystem(){
        return view('pages.services.learning-management-system');
    }

    public function legacyContentConversion(){
        return view('pages.services.legacy-content-conversion');
    }

    public function localizationAndTranslation(){
        return view('pages.services.localization-and-translation');
    }

    public function mobileLearning(){
        return view('pages.services.mobile-learning');
    }

    public function rapidDevelopment(){
        return view('pages.services.rapid-development');
    }

    public function animationPage()
    {
        return view('pages.services.animation');
    }



   /* public function contact(){
        return view('pages.contact');
    }*/

    
}

