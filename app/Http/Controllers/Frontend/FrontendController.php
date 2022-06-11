<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::first()
        ];
        return view('frontend.home.index', compact('data'));
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
        $this->validate($request, [
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();
        }catch (\Exception $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for your contact');
    }
}
