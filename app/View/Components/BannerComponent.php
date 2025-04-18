<?php

namespace App\View\Components;

use App\Models\Slider;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $sliders = Slider::query()
            ->active()
            ->withMedia(['image'])
            ->oldest('order')
            ->get();

        return view('components.banner-component', [
            'sliders' => $sliders,
        ]);
    }
}
