<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Models\Blog;
use App\Models\ContactUs;

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
        flash()->addSuccess('Your message has been sent successfully. Thank you!');

        return back();
        //
    }

    public function courses()
    {
        return view('frontend.courses');

    }

    public function blogs()
    {
        $blogs=Blog::query()
            ->active()
            ->paginate(10);
        $recentBlogs=Blog::query()
            ->active()
            ->latest()
            ->take(4)
            ->get();
        return view('frontend.blogs',compact(['blogs','recentBlogs']));

    }

    public function blogsDetail($slug)
    {
        return view('frontend.blog-detail');

    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function termsAndCondition()
    {
        return view('frontend.terms-and-condition');
    }

    public function faq()
    {
        return view('frontend.faq');
    }
}
