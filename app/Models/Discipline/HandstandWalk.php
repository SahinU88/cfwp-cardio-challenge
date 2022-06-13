<?php

namespace App\Models\Discipline;

use App\Models\Discipline;

class HandstandWalk extends Discipline
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
        'name' => 'HandStandWalk',
    ];

    public function __construct($attributes = [])
    {
        $this->hasDistance = true;
        $this->minimalDistanceToReach = 0.2;
        $this->distanceFactorizer = 20;

        parent::__construct($attributes);
    }
}
