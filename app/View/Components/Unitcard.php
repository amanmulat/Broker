<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Unitcard extends Component
{
    public $unit ; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($unit)
    {
        //
        $this->unit = $unit ; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.unitcard');
    }
}
