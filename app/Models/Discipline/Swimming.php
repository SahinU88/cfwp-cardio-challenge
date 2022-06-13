<?php

namespace App\Models\Discipline;

use App\Models\Discipline;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Swimming extends Discipline
{
    use HasFactory;

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
        'name' => 'Swimming',
    ];

    public function __construct($attributes = [])
    {
        $this->hasDistance = true;
        $this->minimalDistanceToReach = 0.8;
        $this->distanceFactorizer = 5;

        parent::__construct($attributes);
    }
}
