<?php

namespace App\Console\Commands;

use App\Models\Team;
use App\Models\User;
use Illuminate\Console\Command;

class TeamAssignment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cfwp:assign-teams';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assigns teams to users randomly';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $usersGroups = User::all()->shuffle()->split(4);
        $teams = Team::all()->shuffle();

        $usersGroups->each(function($users) use ($teams) {
            $team = $teams->pop();

            $users->each(function($user) use ($team){
                $user->team()->associate($team);
                $user->save();
            });
        });
    }
}
