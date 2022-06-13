<?php

namespace App\Traits;

trait HasRepetition
{
    public function getFillableRepetitionAttributes()
    {
        return ['repetition'];
    }

    public function getRepetitionValidationRules()
    {
        return [
            'repetition' => 'required|numeric|gte:' . $this->getMinRepetition(),
        ];
    }

    public function getMinRepetition()
    {
        return $this->minimalRepetitionToReach;
    }

    public function convertRepetitionToDistance()
    {
        return $this->repetition * 1000 / $this->repetitionToDistanceConversionBase;
    }
}
