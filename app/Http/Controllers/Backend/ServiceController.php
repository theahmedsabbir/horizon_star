<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use function redirect;
use function view;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [
            'page' => 'index',
            'services' => Service::orderBy('created_at', 'desc')->get(),
        ];
        return view('backend.service.index', compact('data'));
    }

    public function create()
    {
        $data = [
            'page' => 'create',
        ];
        return view('backend.service.index', compact('data'));
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
                $request->image->move('assets/service/', $imageName);
            }
            $service = new Service();
            $service->name = $request->name;
            $service->slug = str_replace(' ', '-', strtolower($request->name));
            $service->description = $request->description;
            $service->image = $imageName;
            $service->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/service/manage')->with('success', 'Service has been created');
    }

    public function edit(Service $service, $slug)
    {
        $data = [
            'page' => 'edit',
        ];
        return view('backend.service.index', compact('data', 'service'));
    }

    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required',
        ]);

        try {
            if (isset($request->image)){
                if ($service->image && file_exists('assets/service/'. $service->image)){
                    unlink('assets/service/'. $service->image);
                }
                $imageName = $request->name . time() . '.' .$request->image->extension();
                $request->image->move('assets/service/', $imageName);
                $service->image = $imageName;
            }
            $service->name = $request->name;
            $service->slug = str_replace(' ', '-', strtolower($request->name));
            $service->description = $request->description;
            $service->save();
        }catch (\Exception $exception){
            return redirect()->back()->with($exception->getMessage());
        }
        return redirect('/admin/service/manage')->with('success', 'Service has been updated');
    }

    public function destroy(Service $service)
    {
        if ($service->image && file_exists('/assets/service/'. $service->image)){
            unlink('/assets/service/'. $service->image);
        }
        $service->delete();
        return redirect()->back()->with('success', 'Service has been deleted');
    }
}
