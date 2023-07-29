<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use Plank\Mediable\Facades\MediaUploader;
use Plank\Mediable\Media;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        $teacher=Teacher::query()->create($request->validated());

        if ($request->hasFile('image')) {
            $media = MediaUploader::fromSource($request->file('image'))
                ->useHashForFilename()
                ->toDisk('uploads')
                ->upload();
            $teacher->attachMedia($media->id, 'teacherImage');
        }
        return to_route('teachers.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
            return view('backend.teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $data = $request->safe(['name','description']);

        $teacher->update($data);

        if ($request->hasFile('image')) {
            if ($teacher->firstMedia('teacherImage')) {
                $media = Media::find($teacher->firstMedia('teacherImage')->id);
                MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->replace($media);
            } else {
                $media = MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->upload();
                $teacher->attachMedia($media, 'teacherImage');
            }
        }

        return to_route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        return to_route('teachers.index');
    }
}
