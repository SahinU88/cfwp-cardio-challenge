<?php

namespace App\Models\Discipline;

use App\Models\Discipline;

class Burpees extends Discipline
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
        'name' => 'Burpees',
    ];

    public function __construct($attributes = [])
    {
        $this->hasRepetition = true;
        $this->minimalRepetitionToReach = 300;
        $this->repetitionToDistanceConversionBase = 150;

        parent::__construct($attributes);
    }

    public function calculatePoints()
    {
        return $this->convertRepetitionToDistance();
    }
}
