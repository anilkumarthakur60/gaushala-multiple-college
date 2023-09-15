<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactUs;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [

            [
                'route' => route('contact-us.index'),
                'bgClass' => 'bg-soft-primary',
                'icon' => 'fa-solid fa-images',
                'count' => ContactUs::query()->count(),
                'name' => 'Contact Us',
            ],
            [
                'route' => route('blogs.index'),
                'bgClass' => 'bg-soft-primary',
                'icon' => 'fa-solid fa-panorama',
                'count' => Blog::count(),
                'name' => 'Notice',
            ],
        ];

        return view('dashboard', compact('data'));
    }
    //
}
