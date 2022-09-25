<?php

namespace App\View\Components\exmple;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public function __construct($name)
    {
        //
        // $this->name should be matched with component attribute name like name="$Cname"
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.exmple.header');
    }
}
