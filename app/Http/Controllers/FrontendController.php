<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\StoreNewsLetterRequest;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
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

    public function principalMessage()
    {
        return view('frontend.principal-message');

    }

    public function blogs(Request $request)
    {
        $queryTag = $request->query('tag');
        $search = $request->query('query');
        $blogs = Blog::query()
            ->active()
            ->queryFilter($search)
            ->searchTag($queryTag)
            ->paginate(10);

        $recentBlogs = Blog::query()
            ->active()
            ->latest()
            ->take(4)
            ->get();
        $tags = Blog::query()
            ->searchTag($queryTag)
            ->withWhereHas('tags')
            ->get()
            ?->pluck('tags')
            ?->flatten(1)
            ?->pluck('name')
            ?->toArray();

        return view('frontend.blogs', compact(['blogs', 'recentBlogs', 'tags']));

    }

    public function blogsDetail(Blog $blog)
    {
        return view('frontend.blog-detail', compact('blog'));

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

    public function admission()
    {
        return view('frontend.admission');
    }

    public function technology()
    {
        return view('frontend.technology');
    }

    public function facilities()
    {
        return view('frontend.facilities');
    }

    public function communityService()
    {
        return view('frontend.community-service');
    }

    public function educationalTour()
    {
        return view('frontend.educational-tour');
    }

    public function scout()
    {
        return view('frontend.scout');
    }

    public function projectBasedLearning()
    {
        return view('frontend.project-based-learning');
    }

    public function prizeDistribution()
    {
        return view('frontend.prize-distribution');
    }

    public function calendar()
    {
        return view('frontend.calendar');
    }

    public function newsLetters(StoreNewsLetterRequest $request)
    {

        NewsLetter::query()->firstOrCreate($request->validated());
        flash()->addSuccess('Your message has been sent successfully. Thank you!');

        return back();

    }
}
