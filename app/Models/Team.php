<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getTotal()
    {
        return $this->users
            ->map(fn($user) => $user->getTotalPoints())
            ->sum();
    }

    public function getTotalCurrentWeek()
    {
        return $this->users
            ->map(fn($user) => $user->getTotalForCurrentWeek())
            ->sum();
    }

    public function getTotalAllTimeFor(string $type)
    {
        return $this->users
            ->map(fn($user) => $user->getTotalAllTimeFor($type))
            ->sum();
    }

    public function getTotalCurrentWeekFor(string $type)
    {
        return $this->users
            ->map(fn($user) => $user->getCurrentWeekTotalPointsForType($type))
            ->sum();
    }

    public function getTotalUntilLastWeek()
    {
        $challengePoints = $this->calculateChallengePoints();

        $disciplinePoints = $this->users
            ->map(fn($user) => $user->getTotalUntilLastWeek())
            ->sum();

        return $disciplinePoints + $challengePoints;
    }

    public function getPointsForChallenge(int $challengeId)
    {
        $challenge = Challenge::find($challengeId);
        $boost = $challenge->getChallengeBoostFor($this);
        $pointsForWeek = $this->users
                    ->map(fn($user) => $user->getTotalForWeek($challenge->started_at, $challenge->ended_at))
                    ->sum();

        return $pointsForWeek * $boost;
    }

    private function calculateChallengePoints()
    {
        $challengePoints = Challenge::passed()
            ->get()
            ->map(function($challenge){
                return [
                    'challenge' => $challenge,
                    'pointBoost' => $challenge->getChallengeBoostFor($this),
                ];
            })
            ->map(function($data){
                $pointsForWeek = $this->users
                    ->map(fn($user) => $user->getTotalForWeek($data['challenge']->started_at, $data['challenge']->ended_at))
                    ->sum();

                return $pointsForWeek * ($data['pointBoost']);
            })
            ->sum();

        return $challengePoints;
    }
}
