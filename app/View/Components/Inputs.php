<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Inputs extends Component
{
    /**
     * The type of the input.
     *
     * @var string
     */
    public $type;

    /**
     * The label for the input.
     *
     * @var string
     */
    public $label;

    /**
     * The name of the input.
     *
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $label
     * @param string $name
     */
    public function __construct($type, $label, $name)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs');
    }
}
