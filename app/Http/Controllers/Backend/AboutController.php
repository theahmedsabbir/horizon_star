<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index($id)
    {
        $aboutUpdate = About::find($id);
        return view('backend.about.index', compact('aboutUpdate'));
    }

    public function store(Request $request)
    {
        if ($request->id){
            $aboutUpdate = About::find($request->id);
            $aboutUpdate->heading = $request->heading;
            $aboutUpdate->title = $request->title;
            $aboutUpdate->description = $request->description;
            $aboutUpdate->save();
        }else{
            $about = new About();
            $about->heading = $request->heading;
            $about->title = $request->title;
            $about->description = $request->description;
            $about->save();
        }
        return redirect()->back()->with('success', 'About updated');
    }
}
