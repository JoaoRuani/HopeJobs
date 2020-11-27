<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectAreaExperiencia extends Component
{
    /**
     * @var int
     */
    public $key;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('curriculo.components.select-area-experiencia');
    }
}
