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
            'weeklyChallenge' => Challenge::all()->first(fn($c) => $c->isActive()),
        ]);
    }
}
