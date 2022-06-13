<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function disciplines()
    {
        return $this->hasMany(Discipline::class);
    }

    public function getTotalDistanceFactorizedAttribute()
    {
        $sum = $this->disciplines->sum('points');

        return $sum / 1000;
    }

    public function getCurrentWeekDistanceFactorizedAttribute()
    {
        $sum = $this->disciplines
            ->whereBetween(
                'created_at',
                [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek()
                ]
            )
            ->sum('points');

        return $sum / 1000;
    }

    public function getTotalWalkingForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('Walking');
    }

    public function getTotalSkiErgForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('SkiErg');
    }

    public function getTotalBikingForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('Biking');
    }

    public function getTotalRowingForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('Rowing');
    }

    public function getTotalSwimmingForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('Swimming');
    }

    public function getTotalDoubleUndersForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('DoubleUnders');
    }

    public function getTotalHandstandWalkForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('HandStandWalk');
    }

    public function getTotalBurpeesForWeek()
    {
        return $this->getCurrentWeekTotalPointsForType('Burpees');
    }

    public function getCurrentWeekTotalPointsForType($type)
    {
        $sum = $this->disciplines
            ->where('name', '=', $type)
            ->whereBetween(
                'created_at',
                [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek()
                ]
            )
            ->sum('points');

        return number_format($sum / 1000, 2, ',', '.');
    }
}
