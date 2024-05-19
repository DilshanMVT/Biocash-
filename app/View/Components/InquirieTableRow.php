<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InquirieTableRow extends Component
{
    public $inquirie;

    /**
     * Create a new component instance.
     *
     * @param $inquirie The inquiry data
     */
    public function __construct($inquirie)
    {
        $this->inquirie = $inquirie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inquirie-table-row');
    }
}

