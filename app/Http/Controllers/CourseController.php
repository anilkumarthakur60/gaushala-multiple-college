<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Cviebrock\EloquentTaggable\Models\Tag;
use Plank\Mediable\Facades\MediaUploader;
use Plank\Mediable\Media;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('backend.courses.index');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course=Course::query()->create($request->validated());

        $course->tag($request->input('tags'));
        if ($request->hasFile('image')) {
            $media = MediaUploader::fromSource($request->file('image'))
                ->useHashForFilename()
                ->toDisk('uploads')
                ->upload();
            $course->attachMedia($media->id, 'blogImage');
        }
        return redirect()->route('courses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.courses.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $course->load('tags');
        $tags = Tag::query()->get();

        return view('backend.courses.edit',compact('course','tags'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {


        $data = $request->safe(['name','students']);

        $course->update($data);

        if ($request->hasFile('image')) {
            if ($course->firstMedia('blogImage')) {
                $media = Media::find($course->firstMedia('blogImage')->id);
                MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->replace($media);
            } else {
                $media = MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->upload();
                $course->attachMedia($media, 'blogImage');
            }
        }

        if ($request->filled('tags')) {
            $course->retag($request->input('tags'));
        }

        return redirect()->route('courses.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {

        return redirect()->route('courses.index');
    }
}
