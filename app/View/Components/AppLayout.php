<?php

namespace App\View\Components;

use App\Models\Team;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $options;

    public function __construct($options = [])
    {
        $this->options = $options;

        $this->initialise();
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }

    private function initialise()
    {
        if (! isset($this->options['teams'])) {
            $this->options['teams'] = Team::all();
        }
    }
}
