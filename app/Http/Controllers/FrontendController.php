<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');

    }

    public function about()
    {
        return view('frontend.about');

    }

    public function teachers()
    {
        return view('frontend.teachers');

    }
    public function contactUs()
    {
        return view('frontend.contact-us');

    }

    public function contactUsStore(StoreContactUsRequest $request)
    {

        ContactUs::query()->create($request->validated());
        return back()->with('success', 'Your message has been sent successfully. Thank you!');
        //
    }
}
