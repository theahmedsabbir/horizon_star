<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $data = [
            'page' => 'index',
            'experts' => Expert::orderBy('created_at', 'desc')->get(),
        ];
        return view('backend.expert.index', compact('data'));
    }

    public function create()
    {
        $data = [
            'page' => 'create',
        ];
        return view('backend.expert.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'position' => 'required',
            'image' => 'required',
        ]);

        try {
            if ($request->file('image')){
                $imageName = $request->name . time() . '.' . $request->image->extension();
                $request->image->move('assets/expert/', $imageName);
            }
            $expert = new Expert();
            $expert->name = $request->name;
            $expert->position = $request->position;
            $expert->image = $imageName;
            $expert->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/expert/manage')->with('success', 'Expert has been created');
    }

    public function edit(Expert $expert)
    {
        $data = [
            'page' => 'edit',
        ];
        return view('backend.expert.index', compact('data', 'expert'));
    }

    public function update(Request $request, Expert $expert)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'position' => 'required',
        ]);

        try {
            if (isset($request->image)){
                if ($expert->image && file_exists('assets/expert/'. $expert->image)){
                    unlink('assets/expert/'. $expert->image);
                }
                $imageName = $request->name . time() . '.' .$request->image->extension();
                $request->image->move('assets/expert/', $imageName);
                $expert->image = $imageName;
            }
            $expert->name = $request->name;
            $expert->position = $request->position;
            $expert->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/expert/manage')->with('success', 'Expert has been updated');
    }

    public function destroy(Expert $expert)
    {
        if ($expert->image && file_exists('/assets/service/'. $expert->image)){
            unlink('/assets/expert/'. $expert->image);
        }
        $expert->delete();
        return redirect()->back()->with('success', 'Expert has been deleted');
    }
}
