<?php

namespace App\Models\Discipline;

use App\Models\Discipline;

class SkiErg extends Discipline
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
        'name' => 'SkiErg',
    ];

    public function __construct($attributes = [])
    {
        $this->hasDistance = true;
        $this->distanceFactorizer = 1.2;
        $this->minimalDistanceToReach = 3;

        parent::__construct($attributes);
    }
}
