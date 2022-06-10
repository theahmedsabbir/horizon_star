<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $data = [
            'page' => 'index',
            'technology' => Technology::orderBy('created_at', 'desc')->get(),
        ];
        return view('backend.technology.index', compact('data'));
    }

    public function create()
    {
        $data = [
            'page' => 'create',
        ];
        return view('backend.technology.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required',
            'image' => 'required',
        ]);

        try {
            if ($request->file('image')){
                $imageName = $request->name . time() . '.' . $request->image->extension();
                $request->image->move('assets/technology/', $imageName);
            }
            $technology = new Technology();
            $technology->name = $request->name;
            $technology->slug = str_replace(' ', '-', strtolower($request->name));
            $technology->description = $request->description;
            $technology->image = $imageName;
            $technology->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/technology/manage')->with('success', 'Technology has been created');
    }

    public function edit(Technology $technology, $slug)
    {
        $data = [
            'page' => 'edit',
        ];
        return view('backend.technology.index', compact('data', 'technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required',
        ]);

        try {
            if (isset($request->image)){
                if ($technology->image && file_exists('assets/technology/'. $technology->image)){
                    unlink('assets/technology/'. $technology->image);
                }
                $imageName = $request->name . time() . '.' .$request->image->extension();
                $request->image->move('assets/technology/', $imageName);
                $technology->image = $imageName;
            }
            $technology->name = $request->name;
            $technology->slug = str_replace(' ', '-', strtolower($request->name));
            $technology->description = $request->description;
            $technology->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/technology/manage')->with('success', 'Technology has been updated');
    }

    public function destroy(Technology $technology)
    {
        if ($technology->image && file_exists('/assets/technology/'. $technology->image)){
            unlink('/assets/technology/'. $technology->image);
        }
        $technology->delete();
        return redirect()->back()->with('success', 'Technology has been deleted');
    }
}
