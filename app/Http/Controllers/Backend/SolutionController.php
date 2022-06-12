<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Consult;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index($id)
    {
        $solutionUpdate = Solution::find($id);
        return view('backend.solution.index', compact('solutionUpdate'));
    }

    public function store(Request $request)
    {
        if ($request->id){
            $solutionUpdate = Solution::find($request->id);
            $solutionUpdate->title = $request->title;
            $solutionUpdate->save();
        }else{
            $solution = new Solution();
            $solution->title = $request->title;
            $solution->save();
        }
        return redirect()->back()->with('success', 'Solution updated');
    }

    public function consult_index($id)
    {
        $consultUpdate = Consult::find($id);
        return view('backend.consult.index', compact('consultUpdate'));
    }

    public function consult_store(Request $request)
    {
        if ($request->id){
            $consultUpdate = Consult::find($request->id);
            $consultUpdate->title = $request->title;
            $consultUpdate->description = $request->description;
            $consultUpdate->save();
        }else{
            $consult = new Consult();
            $consult->title = $request->title;
            $consult->description = $request->description;
            $consult->save();
        }
        return redirect()->back()->with('success', 'Consult updated');
    }
}
