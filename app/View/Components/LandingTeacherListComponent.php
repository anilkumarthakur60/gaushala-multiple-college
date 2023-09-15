<?php

namespace App\View\Components;

use App\Models\Teacher;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LandingTeacherListComponent extends Component
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
        $teachers = Teacher::query()->whereHasMedia('teacherImage')->get();

        return view('components.landing-teacher-list-component', ['teachers' => $teachers]);
    }
}
