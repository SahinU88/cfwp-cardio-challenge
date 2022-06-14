<?php

namespace App\Http\Controllers;

use App\Models\Team;

class DashboardController extends Controller
{
    public function show()
    {
        return view('dashboard')->with([
            'teams' => Team::all()->sortByDesc(fn($team) => $team->getTotalUntilLastWeek()),
        ]);
    }
}
