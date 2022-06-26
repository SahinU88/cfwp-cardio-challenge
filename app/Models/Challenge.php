<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
