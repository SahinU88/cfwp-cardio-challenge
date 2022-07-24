<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Team;

class DashboardController extends Controller
{
    public function show()
    {
        return view('dashboard')->with([
            'teams' => Team::all()->sortByDesc(fn($team) => $team->getTotalUntilLastWeek()),
            'weeklyChallenge' => [
                'burpeeMile' => Challenge::find(4),
                'rowMarathon' => Challenge::find(5),
            ],
        ]);
    }
}
