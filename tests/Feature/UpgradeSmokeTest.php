<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

beforeEach(fn () => $this->actingAs(User::factory()->create(['type' => true])));

it('renders admin and public pages', function (string $uri) {
    $this->get($uri)->assertOk();
})->with(['/dashboard', '/dashboard/blogs', '/dashboard/teachers', '/dashboard/courses', '/dashboard/sliders',
    '/dashboard/news-letters', '/dashboard/contact-us', '/dashboard/sliders/create', '/user/profile', '/', '/teachers', '/notice', '/contact-us']);

it('uploads a slider image to the uploads disk and lists it', function () {
    Storage::fake('uploads');

    $this->post('/dashboard/sliders', [
        'name' => 'Upgrade check', 'order' => 1, 'status' => 1,
        'image' => UploadedFile::fake()->image('slide.jpg'),
    ])->assertSessionHasNoErrors();

    $slider = App\Models\Slider::firstOrFail();
    $media = $slider->firstMedia('image');
    expect($media)->not->toBeNull()
        ->and($media->disk)->toBe('uploads')
        ->and(Storage::disk('uploads')->exists($media->getDiskPath()))->toBeTrue();

    Livewire::test(App\Livewire\SliderDataTable::class)->assertSee('Upgrade check')->assertSee($media->getUrl());
});
