<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RequiredComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public  $type,
        public  $names,
        public  $placeholder = null,
        public  $classes = null,
        public  $required = null,
        public  $value = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.required-component');
    }
}
