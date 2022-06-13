<?php

namespace App\Models\Discipline;

use App\Models\Discipline;

class Biking extends Discipline
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'disciplines';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'Biking',
    ];

    public function __construct($attributes = [])
    {
        $this->hasDistance = true;
        $this->minimalDistanceToReach = 14;
        $this->distanceFactorizer = 0.3;
        $this->hasElevation = true;
        $this->minimalElevationToReach = 200;

        parent::__construct($attributes);
    }

    public function calculatePoints()
    {
        $points = parent::calculatePoints();

        return $points * $this->getElevationFactor();
    }
}
