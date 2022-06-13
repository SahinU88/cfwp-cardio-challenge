<?php

namespace App\Models\Discipline;

use App\Models\Discipline;

class DoubleUnders extends Discipline
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
        'name' => 'DoubleUnders',
    ];

    public function __construct($attributes = [])
    {
        $this->hasDistance = false;
        $this->hasRepetition = true;
        $this->minimalRepetitionToReach = 500;
        $this->repetitionToDistanceConversionBase = 250;

        parent::__construct($attributes);
    }

    public function calculatePoints()
    {
        return $this->convertRepetitionToDistance();
    }
}
