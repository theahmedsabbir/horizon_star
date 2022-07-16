<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Career;
use App\Models\Consult;
use App\Models\Contact;
use App\Models\Expert;
use App\Models\IndustryService;
use App\Models\MissionVision;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Technology;
use App\Models\Testimonial;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Mail;
// use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::first(),
            'consult' => Consult::first(),
            'solution' => Solution::first(),
            'industryServices' => IndustryService::orderByDesc('created_at')->get(),
            'experts' => Expert::orderByDesc('created_at')->get(),
            'testimonials' => Testimonial::orderByDesc('created_at')->get(),
        ];
        return view('frontend.home.index', compact('data'));
    }

    public function service($id, $slug)
    {
        $service = Service::orderByDesc('created_at')->where('id', $id)->first();
        return view('frontend.service.details', compact('service'));
    }

    public function technologies($id, $slug)
    {
        $technology = Technology::orderByDesc('created_at')->where('id', $id)->first();
        return view('frontend.technology.details', compact('technology'));
    }

    public function careers($id, $slug)
    {
        $career = Career::orderByDesc('created_at')->where('id', $id)->first();
        return view('frontend.career.details', compact('career'));
    }

    public function mission_vision()
    {
        $missionVision = MissionVision::orderByDesc('created_at')->first();
        return view('frontend.mission-vision.details', compact('missionVision'));
    }

    public function about()
    {
        $about = About::orderByDesc('created_at')->first();
        return view('frontend.about.details', compact('about'));
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }


    public function language($code)
    {
    	// update session
    	session()->put('language_code', $code);

    	// update cookie
    	setcookie('googtrans', null);
        setcookie('googtrans', '/en/' . Session::get('language_code'));

        return redirect()->back();
    }

    public function contactUs(Request $request)
    {
        //dd($request->all());
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $email = 'info@horizonsolutions.tech';
        Mail::send('frontend.emails.contact-form',  ['name' => $request->name, 'email' => $request->email, 'mage' => $request->message], function ($msg) use ($email, $request)
        {
            $msg->from('info@horizonsolutions.tech', 'Portfolio');
            $msg->subject('Send Form My portfolio');
            $msg->to($email);
        });
        $contact->save();
        return redirect()->back()->with('success', 'Thank you for your contact');
//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required',
//            'message' => 'required',
//        ]);
//        try {
//            $contact = new Contact();
//            $contact->name = $request->name;
//            $contact->email = $request->email;
//            $contact->message = $request->message;
//            $email = 'info@horizonsolutions.tech';
//             Mail::send('frontend.emails.contact-form',  ['name' => $request->name, 'email' => $request->email, 'mage' => $request->message], function ($msg) use ($email, $request)
//            {
//                $msg->from('info@horizonsolutions.tech', 'Portfolio');
//                $msg->subject('Send Form My portfolio');
//                $msg->to($email);
//            });
//            $contact->save();
//            return redirect()->back()->with('success', 'Thank you for your contact');
//        }catch (\Exception $exception){
//            return redirect()->back()->with('error', $exception->getMessage());
//        }
    }

    public function terms_condition()
    {
        return view('frontend.conditions.conditions');
    }

    public function privacy_policy()
    {
        return view('frontend.privacy.privacy');
    }

    public function gdpr()
    {
        return view('frontend.gdpr.gdpr');
    }
}
