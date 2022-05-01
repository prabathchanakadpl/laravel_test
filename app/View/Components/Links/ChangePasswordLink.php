<?php

namespace App\View\Components\Links;

use Illuminate\View\Component;

class ChangePasswordLink extends Component
{
    public $url;
    public $class;
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url,$class,$text)
    {
        $this->url   = $url;
        $this->class = $class;
        $this->text  = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.links.change-password-link');
    }
}
