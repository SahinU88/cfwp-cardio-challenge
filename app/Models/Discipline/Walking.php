<?php

namespace App\Models\Discipline;

use App\Models\Discipline;

class Walking extends Discipline
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
        'name' => 'Walking',
    ];

    public function __construct($attributes = [])
    {
        $this->hasDistance = true;
        $this->minimalDistanceToReach = 4;
        $this->distanceFactorizer = 1;
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
