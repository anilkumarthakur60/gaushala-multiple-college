<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Cviebrock\EloquentTaggable\Models\Tag;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Plank\Mediable\Facades\MediaUploader;
use Plank\Mediable\Media;

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
        $blog->load('tags');
        $tags = Tag::query()->get();

        return view('backend.blogs.edit',compact('blog','tags'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {

        try {
            DB::beginTransaction();
            $data = $request->safe([
                'name',
                'slug',
                'subtitle',
                'description',
                'blog_category_id',
                'featured', ]);

            $blog->update($data);

            if ($request->hasFile('image')) {
                if ($blog->firstMedia('blogImage')) {
                    $media = Media::find($blog->firstMedia('blogImage')->id);
                    MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->replace($media);
                } else {
                    $media = MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->upload();
                    $blog->attachMedia($media, 'blogImage');
                }
            }

            if ($request->filled('tags')) {
                $blog->retag($request->input('tags'));
            }

            DB::commit();
        } catch (QueryException $e) {
            DB::rollBack();
            flasher($e->getMessage());
            dd($e);
        } catch (\Throwable $e) {
            DB::rollBack();
            flasher($e->getMessage());
            dd($e);
        }

        return to_route('blogs.index');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

    }
}
