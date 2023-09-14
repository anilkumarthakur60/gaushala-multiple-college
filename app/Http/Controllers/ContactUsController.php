<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.contact_us.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactUsRequest $request)
    {

        ContactUs::query()->create($request->validated());

        flash('Your message has been sent successfully. Thank you!');

        return redirect()->back();
        //
    }
}
