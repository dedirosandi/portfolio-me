<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\frontend\Hero;
use App\Models\frontend\AboutMe;
use App\Http\Controllers\Controller;
use App\Models\frontend\Experience;
use App\Models\frontend\Service;

class LandingpageController extends Controller
{
    //
    public function index()
    {
        $hero = Hero::first();
        $about = AboutMe::first();
        $service = Service::all();
        $experience = Experience::all();

        return view('frontend.index', compact('hero', 'about', 'service', 'experience'));
    }
}
