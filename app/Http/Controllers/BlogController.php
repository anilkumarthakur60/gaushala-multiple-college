<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Cviebrock\EloquentTaggable\Models\Tag;
use Illuminate\Support\Facades\DB;
use Plank\Mediable\Facades\MediaUploader;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blogs.index');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {


        try {
            DB::beginTransaction();

            $blog = Blog::query()->create(attributes: $request->only([
                'name',
                'description',
            ]));
            $blog->tag($request->input('tags'));
            if ($request->hasFile('image')) {
                $media = MediaUploader::fromSource($request->file('image'))
                    ->useHashForFilename()
                    ->toDisk('uploads')
                    ->upload();
                $blog->attachMedia($media->id, 'blogImage');
            }
            DB::commit();

        }catch (\Exception $exception){
            DB::rollBack();
            flash()->addError($exception->getMessage());
            return redirect()->back();
        }


        return redirect()->route('blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tags = Tag::query()->get();

        return view('backend.blogs.create', compact('tags'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {

        return view('backend.blogs.edit');
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

    }
}
