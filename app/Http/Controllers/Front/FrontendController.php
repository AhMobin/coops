<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Banner;
use App\Model\Benefit;
use App\Model\Dream;
use App\Model\JobInAmerica;
use App\Model\Service;
use App\Model\Story;
use App\Model\Goal;
use App\Model\Dancy;
use App\Model\VisitorComment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banner = Banner::where('status',1)->first();
        $about = About::where('status',1)->first();
        $story = Story::where('status',1)->first();
        $dream = Dream::where('status',1)->first();
        $dancy = Dancy::where('status',1)->first();
        $services = Service::where('status',1)->get();
        $benefits = Benefit::where('status',1)->get();

        return view('frontend.pages.index',compact('banner','about','story','dream','dancy','services','benefits'));
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
        $job = JobInAmerica::where('status',1)->first();
        return view('frontend.pages.jobs',compact('job'));
    }


    public function contact(){
        return view('frontend.pages.contact');
    }

    public function dancy(){
        $dancy = Dancy::where('status',1)->first();
        return view('frontend.pages.dancy',compact('dancy'));
    }


    public function guide(){
        return view('frontend.pages.cch_guide');
    }

    public function BoDirectors(){
        return view('frontend.pages.board_directors');
    }


    public function ContactForm(Request $request){

        $request->validate([
           'name' => 'required',
           'email' => 'required',
           'message' => 'required',
        ]);

        VisitorComment::create([
           'name' => $request->name,
           'email' => $request->email,
           'subject' => $request->subject,
           'message' => $request->message,
        ]);

        $notification = array(
            'messege' => 'Thanks For Your Message.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
