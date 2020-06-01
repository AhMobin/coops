<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Banner;
use App\Model\Dream;
use App\Model\Story;
use App\Model\Goal;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banner = Banner::where('status',1)->first();
        $about = About::where('status',1)->first();
        $story = Story::where('status',1)->first();
        $dream = Dream::where('status',1)->first();

        return view('frontend.pages.index',compact('banner','about','story','dream'));
    }


    public function about(){
        $about = About::where('status',1)->first();
        return view('frontend.pages.about',compact('about'));
    }


    public function story(){
        $story = Story::where('status',1)->first();
        return view('frontend.pages.story',compact('story'));
    }


    public function dream(){
        $dream = Dream::where('status',1)->first();
        return view('frontend.pages.dream',compact('dream'));
    }

    public function goals(){
        $goal = Goal::where('status',1)->first();
        return view('frontend.pages.goal',compact('goal'));
    }

    public function jobs(){
        return view('frontend.pages.jobs');
    }


    public function contact(){
        return view('frontend.pages.contact');
    }
}
