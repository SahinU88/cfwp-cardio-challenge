<?php

namespace App\Traits;

trait HasDistance
{
    public function getFillableDistanceAttributes()
    {
        return ['distance'];
    }

    public function getDistanceValidationRules()
    {
        return [
            'distance' => 'required|numeric|gte:' . $this->getMinDistance(),
        ];
    }

    public function getMinDistance()
    {
        return $this->minimalDistanceToReach;
    }

    public function setDistanceAttribute($value)
    {
        $this->attributes['distance'] = $value * 1000;
    }

    public function getDistanceInKmAttribute()
    {
        return $this->distance / 1000;
    }
}
