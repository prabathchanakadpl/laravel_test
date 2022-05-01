<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Primary extends Component
{
    public $type;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$class)
    {
        $this->type  = $type;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.primary');
    }
}
