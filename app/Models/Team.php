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
            ->map(function($user){
                return $user->getTotalDistanceFactorizedAttribute();
            })
            ->sum();
    }

    public function getTotalCurrentWeek()
    {
        return $this->users
            ->map(function($user){
                return $user->getCurrentWeekDistanceFactorizedAttribute();
            })
            ->sum();
    }
}
