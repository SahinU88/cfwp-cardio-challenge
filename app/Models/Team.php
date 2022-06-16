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
        return $this->users
            ->map(fn($user) => $user->getTotalUntilLastWeek())
            ->sum();
    }
}
