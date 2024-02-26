<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Plank\Mediable\Facades\MediaUploader;
use Plank\Mediable\Media;
use Throwable;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.sliders.index');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request): RedirectResponse
    {

        try {
            DB::beginTransaction();

            $blog = Slider::query()->create(attributes: $request->only([
                'name',
                'order',
            ]));
            if ($request->hasFile('image')) {
                $media = MediaUploader::fromSource($request->file('image'))
                    ->useHashForFilename()
                    ->toDisk('uploads')
                    ->upload();
                $blog->attachMedia($media->id, 'image');
            }
            DB::commit();

        } catch (Exception $exception) {
            DB::rollBack();
            flash()->addError($exception->getMessage());

            return redirect()->back();
        }

        return redirect()->route('sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.sliders.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {

        return view('backend.sliders.edit', compact('slider'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {

        try {
            DB::beginTransaction();
            $data = $request->safe(['name','order']);

            $slider->update($data);

            if ($request->hasFile('image')) {
                if ($slider->firstMedia('image')) {
                    $media = Media::find($slider->firstMedia('image')->id);
                    MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->replace($media);
                } else {
                    $media = MediaUploader::fromSource($request->file('image'))->useHashForFilename()->toDisk('uploads')->upload();
                    $slider->attachMedia($media, 'image');
                }
            }

            DB::commit();
        } catch (QueryException $e) {
            DB::rollBack();
            flasher($e->getMessage());
            dd($e);
        } catch (Throwable $e) {
            DB::rollBack();
            flasher($e->getMessage());
            dd($e);
        }

        return to_route('sliders.index');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        return back();

    }
}
