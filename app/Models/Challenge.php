<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'started_at' => 'date',
        'ended_at' => 'date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function isActive()
    {
        return $this->started_at >= Carbon::now()->startOfWeek() && $this->ended_at <= Carbon::now()->endOfWeek();
    }

    public function getChallengeBoostFor(Team $team)
    {
        $usersWhoCompletedTheChallenge = $team->users->filter(fn($user) => $user->didCompleteChallenge($this));

        return $this->calculateBoost($usersWhoCompletedTheChallenge->count(), $team->users->count());
    }

    private function calculateBoost($count, $numberOfTeammembers)
    {
        $boost = 0;

        if ($count == 0){
            return 0;
        }

        if ($count == $numberOfTeammembers) {
            return 0.2;
        }

        if ($count >= 6) {
            return 0.15;
        }

        if ($count >= 3) {
            return 0.1;
        }

        return $boost;
    }

    public function scopePassed($query)
    {
        return $query->where('ended_at', '<', Carbon::now());
    }
}
