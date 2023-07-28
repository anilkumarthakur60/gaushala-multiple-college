<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Models\Blog;
use App\Models\ContactUs;
use Cviebrock\EloquentTaggable\Models\Tag;
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
        flash()->addSuccess('Your message has been sent successfully. Thank you!');

        return back();
        //
    }

    public function courses()
    {
        return view('frontend.courses');

    }

    public function blogs(Request $request)
    {
        $queryTag=$request->query('tag');
        $blogs=Blog::query()
            ->active()
            ->when($queryTag,fn($query) => $query->withAnyTags($queryTag))
            ->paginate(10);

        $recentBlogs=Blog::query()
            ->active()
            ->latest()
            ->take(4)
            ->get();
        $tags=Blog::query()
            ->withWhereHas('tags')
            ->get()
            ?->pluck('tags')
            ?->flatten(1)
            ?->pluck('name')
            ?->toArray();
        return view('frontend.blogs',compact(['blogs','recentBlogs','tags']));

    }

    public function blogsDetail(Blog $blog)
    {
        return view('frontend.blog-detail',compact('blog'));

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
