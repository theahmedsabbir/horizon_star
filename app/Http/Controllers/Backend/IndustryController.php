<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\IndustryService;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $data = [
            'page' => 'index',
            'Industries' => IndustryService::orderBy('created_at', 'desc')->get(),
        ];
        return view('backend.industry.index', compact('data'));
    }

    public function create()
    {
        $data = [
            'page' => 'create',
        ];
        return view('backend.industry.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required',
            'image' => 'required',
        ]);

        try {
            if ($request->file('image')){
                $imageName = $request->name . time() . '.' . $request->image->extension();
                $request->image->move('assets/industry/', $imageName);
            }
            $expert = new IndustryService();
            $expert->title = $request->title;
            $expert->description = $request->description;
            $expert->image = $imageName;
            $expert->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/industry/manage')->with('success', 'Industry has been created');
    }

    public function edit($id)
    {
        $data = [
            'page' => 'edit',
        ];
        $industryService = IndustryService::find($id);
        return view('backend.industry.index', compact('data', 'industryService'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required',
        ]);

        try {
            $industryService = IndustryService::find($id);
            if (isset($request->image)){
                if ($industryService->image && file_exists('assets/industry/'. $industryService->image)){
                    unlink('assets/industry/'. $industryService->image);
                }
                $imageName = $request->title . time() . '.' .$request->image->extension();
                $request->image->move('assets/industry/', $imageName);
                $industryService->image = $imageName;
            }
            $industryService->title = $request->title;
            $industryService->description = $request->description;
            $industryService->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/industry/manage')->with('success', 'Industry has been updated');
    }

    public function destroy($id)
    {
        $industryService = IndustryService::find($id);
        if ($industryService->image && file_exists('/assets/industry/'. $industryService->image)){
            unlink('/assets/industry/'. $industryService->image);
        }
        $industryService->delete();
        return redirect()->back()->with('success', 'Industry has been deleted');
    }
}
