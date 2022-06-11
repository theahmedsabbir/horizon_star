<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $data = [
            'page' => 'index',
            'careers' => Career::orderBy('created_at', 'desc')->get(),
        ];
        return view('backend.career.index', compact('data'));
    }

    public function create()
    {
        $data = [
            'page' => 'create',
        ];
        return view('backend.career.index', compact('data'));
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
                $request->image->move('assets/career/', $imageName);
            }
            $service = new Career();
            $service->name = $request->name;
            $service->slug = str_replace(' ', '-', strtolower($request->name));
            $service->description = $request->description;
            $service->image = $imageName;
            $service->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/career/manage')->with('success', 'Career has been created');
    }

    public function edit(Career $career, $slug)
    {
        $data = [
            'page' => 'edit',
        ];
        return view('backend.career.index', compact('data', 'career'));
    }

    public function update(Request $request, Career $career)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required',
        ]);

        try {
            if (isset($request->image)){
                if ($career->image && file_exists('assets/career/'. $career->image)){
                    unlink('assets/career/'. $career->image);
                }
                $imageName = $request->name . time() . '.' .$request->image->extension();
                $request->image->move('assets/career/', $imageName);
                $career->image = $imageName;
            }
            $career->name = $request->name;
            $career->slug = str_replace(' ', '-', strtolower($request->name));
            $career->description = $request->description;
            $career->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/career/manage')->with('success', 'Career has been updated');
    }

    public function destroy(Career $career)
    {
        if ($career->image && file_exists('/assets/career/'. $career->image)){
            unlink('/assets/career/'. $career->image);
        }
        $career->delete();
        return redirect()->back()->with('success', 'Career has been deleted');
    }
}
