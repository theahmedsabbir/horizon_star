<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MissionVision;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
{
    public function index($id)
    {
        $missionVision = MissionVision::find($id);
        return view('backend.mission-vision.index', compact('missionVision'));
    }

    public function store(Request $request)
    {
        if ($request->id){
            $missionVisionUpdate = MissionVision::find($request->id);
            $missionVisionUpdate->description = $request->description;
            $missionVisionUpdate->save();
        }else{
            $missionVision = new MissionVision();
            $missionVision->description = $request->description;
            $missionVision->save();
        }
        return redirect()->back()->with('success', 'Mission and Vision updated');
    }
}
