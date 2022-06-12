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
            if (isset($request->image)){
                if ($aboutUpdate->image && file_exists('assets/about/'. $aboutUpdate->image)){
                    unlink('assets/about/'. $aboutUpdate->image);
                }
                $imageName = time() . '.' .$request->image->extension();
                $request->image->move('assets/about/', $imageName);
                $aboutUpdate->image = $imageName;
            }

            $aboutUpdate->heading = $request->heading;
            $aboutUpdate->title = $request->title;
            $aboutUpdate->description = $request->description;
            $aboutUpdate->image_content = $request->image_content;
            $aboutUpdate->save();
        }else{
            $imageName = time() . '.' .$request->image->extension();
            $request->image->move('assets/about/', $imageName);
            $about = new About();
            $about->heading = $request->heading;
            $about->title = $request->title;
            $about->description = $request->description;
            $about->image = $imageName;
            $about->save();
        }
        return redirect()->back()->with('success', 'About updated');
    }
}
