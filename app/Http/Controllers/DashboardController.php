<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Slider;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [

            [
                'route' => route('sliders.index'),
                'bgClass' => 'bg-soft-primary',
                'icon' => 'fa-solid fa-bell',
                'count' => Blog::count(),
                'name' => 'Notice',
            ],
            [
                'route' => route('contact-us.index'),
                'bgClass' => 'bg-soft-primary',
                'icon' => 'fa-solid fa-images',
                'count' => ContactUs::query()->count(),
                'name' => 'Contact Us',
            ],
            [
                'route' => route('teachers.index'),
                'bgClass' => 'bg-soft-primary',
                'icon' => 'fa-sharp fa-solid fa-chalkboard-user',
                'count' => Teacher::count(),
                'name' => 'Teacher',
            ],
            [
                'route' => route('sliders.index'),
                'bgClass' => 'bg-soft-primary',
                'icon' => 'fa-solid fa-sliders',
                'count' => Slider::count(),
                'name' => 'Slider',
            ],
        ];

        return view('dashboard', compact('data'));
    }
    //
}
