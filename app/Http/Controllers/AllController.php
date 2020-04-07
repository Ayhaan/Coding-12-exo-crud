<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intro;
use App\Portfolio;
use App\Testimonial;
use App\Team;
use App\Service;


class AllController extends Controller
{
    public function show(){
        $intros = Intro::first();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $services = Service::all();
        return view('index', compact('intros', 'portfolios', 'testimonials', 'teams', 'services')); 
    }
}
