<?php

namespace App\Models;

use App\Traits\HasDistance;
use App\Traits\HasElevation;
use App\Traits\HasRepetition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory, HasDistance, HasElevation, HasRepetition;

    protected $hasDistance = false;
    protected $minimalDistanceToReach = 0;
    protected $distanceFactorizer = 0;
    protected $hasElevation = false;
    protected $minimalElevationToReach = 0;
    protected $hasRepetition = false;
    protected $minimalRepetitionToReach = 0;
    protected $repetitionToDistanceConversionBase = 0;

    protected $fillable = [
        'user_id',
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->points = $model->calculatePoints();
        });
    }

    public function __construct($attributes = []) {
        $this->fillable = [
            ...$this->fillable,
        ];

        if ($this->hasDistance) {
            $this->fillable = [...$this->fillable, ...$this->getFillableDistanceAttributes()];
        }

        if ($this->hasRepetition) {
            $this->fillable = [...$this->fillable, ...$this->getFillableRepetitionAttributes()];
        }

        if ($this->hasElevation) {
            $this->fillable = [...$this->fillable, ...$this->getFillableElevationAttributes()];
        }

        parent::__construct($attributes);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function calculatePoints() {
        return $this->distance * $this->distanceFactorizer;
    }

    public function getValidationRules() {
        $rules = [];

        if ($this->hasDistance) {
            $rules = array_merge($rules, $this->getDistanceValidationRules());
        }

        if ($this->hasRepetition) {
            $rules = array_merge($rules, $this->getRepetitionValidationRules());
        }

        if ($this->hasElevation) {
            $rules = array_merge($rules, $this->getElevationValidationRules());
        }

        return $rules;
    }

    public function scopeType($query, $type) {
        return $query->where('name', '=', $type);
    }
}
