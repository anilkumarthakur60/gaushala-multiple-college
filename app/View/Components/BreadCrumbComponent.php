<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadCrumbComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $title1, public ?string $title2 = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bread-crumb-component');
    }
}
