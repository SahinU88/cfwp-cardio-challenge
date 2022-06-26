<?php

namespace App\Models;

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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
