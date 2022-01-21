<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $field;
    public $type;
    public $lable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field, $lable ="", $type="text")
    {
        $this->field = $field;
        $this->lable = $lable;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
