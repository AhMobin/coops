<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banner = Banner::where('status',1)->first();
        return view('frontend.pages.index',compact('banner'));
    }


    public function about(){
        return view('frontend.pages.about');
    }


    public function story(){
        return view('frontend.pages.story');
    }


    public function dream(){
        return view('frontend.pages.dream');
    }

    public function goals(){
        return view('frontend.pages.goal');
    }

    public function jobs(){
        return view('frontend.pages.jobs');
    }


    public function contact(){
        return view('frontend.pages.contact');
    }
}
