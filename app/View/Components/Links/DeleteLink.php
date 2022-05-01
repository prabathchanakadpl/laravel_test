<?php

namespace App\View\Components\Links;

use Illuminate\View\Component;

class DeleteLink extends Component
{
    public $url;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url,$class)
    {
        $this->url   = $url;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.links.delete-link');
    }
}
