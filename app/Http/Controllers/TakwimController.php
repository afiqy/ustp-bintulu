<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Takwim;

class TakwimController extends Controller
{
    public function index()
    {
        $activities = Takwim::all();
        return response()->json($activities);
    }

    public function getActivitiesByDate($date)
    {
        $activities = Takwim::whereDate('start_date', $date)->get();
        return response()->json($activities);
    }

    public function store(Request $request)
    {
        $activity = new Takwim;
        $activity->title = $request->title;
        $activity->start_date = $request->date;
        $activity->save();

        return redirect()->route('takwim');
    }

    public function destroy($id)
    {
        $activity = Takwim::findOrFail($id);
        $activity->delete();

        return response()->json(['success' => 'Activity deleted successfully.']);
    }
}
