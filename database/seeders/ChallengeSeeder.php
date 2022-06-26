<?php

namespace Database\Seeders;

use App\Models\Challenge;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Challenge::create([
            'name' => '200 Burpees!',
            'description' => 'Do 200 Burpees this week',
            'started_at' => Carbon::parse('20.06.2022'),
            'ended_at' => Carbon::parse('26.06.2022'),
        ]);
    }
}
