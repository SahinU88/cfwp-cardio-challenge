<?php

namespace App\Traits;

trait HasElevation
{
    public function getFillableElevationAttributes()
    {
        return ['elevation'];
    }

    public function getElevationValidationRules()
    {
        return [
            'elevation' => 'nullable|numeric|gte:' . $this->getMinElevation(),
        ];
    }

    public function getMinElevation()
    {
        return $this->minimalElevationToReach;
    }

    public function getElevationFactor()
    {
        return $this->elevation / 1000 + 1;
    }
}
