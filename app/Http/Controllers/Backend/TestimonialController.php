<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $data = [
            'page' => 'index',
            'testimonials' => Testimonial::orderBy('created_at', 'desc')->get(),
        ];
        return view('backend.testimonial.index', compact('data'));
    }

    public function create()
    {
        $data = [
            'page' => 'create',
        ];
        return view('backend.testimonial.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'position' => 'required|string',
            'description' => 'required',
        ]);

        try {
            $position = new Testimonial();
            $position->position = $request->position;
            $position->description = $request->description;
            $position->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/testimonial/manage')->with('success', 'Testimonial has been created');
    }

    public function edit(Testimonial $testimonial)
    {
        $data = [
            'page' => 'edit',
        ];
        return view('backend.testimonial.index', compact('data', 'testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $this->validate($request, [
            'position' => 'required|string',
            'description' => 'required',
        ]);

        try {
            $testimonial->position = $request->position;
            $testimonial->description = $request->description;
            $testimonial->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/testimonial/manage')->with('success', 'Testimonial has been updated');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial has been deleted');
    }
}
