<?php

namespace App\Models\Discipline;

use App\Models\Discipline;

class Rowing extends Discipline
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
        'name' => 'Rowing',
    ];

    public function __construct($attributes = [])
    {
        $this->hasDistance = true;
        $this->minimalDistanceToReach = 0;
        $this->distanceFactorizer = 0.8;

        parent::__construct($attributes);
    }
}
