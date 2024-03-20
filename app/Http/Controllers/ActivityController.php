<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Retrieve activities for a specific date.
     *
     * @param  string  $date
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActivitiesForDate($date)
    {
        $activities = Activity::whereDate('date', $date)->get();
        return response()->json($activities);
    }

    /**
     * Store a new activity.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        Activity::create([
            'title' => $request->title,
            'date' => $request->date,
        ]);

        return redirect()->back()->with('success', 'Activity added successfully.');
    }
}

