<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Tic Tac Toe2Bar',
        ]);

        Team::create([
            'name' => 'AC/PVC',
        ]);

        Team::create([
            'name' => 'Lunge Bizkit',
        ]);

        Team::create([
            'name' => 'Modern Walking',
        ]);
    }
}
