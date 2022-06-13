<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Notification extends Component
{
    public $type;

    public $distance;

    public $points;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $distance, $points)
    {
        $this->type = $type;
        $this->distance = $distance;
        $this->points = $points;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification');
    }
}
