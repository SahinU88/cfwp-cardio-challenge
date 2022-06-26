<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{
    public function store(Challenge $challenge)
    {
        $response = [];
        $challengeCompleted = request()->get('completed', 'off') == 'on';

        if ($challenge->isActive())
        {
            $usersEntry = Auth::user()->challenges->where('id', $challenge->id);

            if ($usersEntry->isNotEmpty() && $challengeCompleted)
            {
                // already saved, do nothing
            } else {

                if ($challengeCompleted)
                {
                    Auth::user()->challenges()->attach($challenge);
                } else {
                    Auth::user()->challenges()->detach($challenge);
                }
            }

            $response = [
                'challengeUpdated' => true,
                'challengeCompleted' => $challengeCompleted
            ];
        }

        return redirect()->to(route('dashboard'))->with($response);
    }
}
