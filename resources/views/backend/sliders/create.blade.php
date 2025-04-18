<x-app-layout>
    <main class="main-content mt-5">
        <div class="container-fluid content-inner py-0">
            <div class="card pb-4">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Sliders</h4>
                    </div>
                    <a href="{{ route('sliders.index') }}" class="btn btn-primary">Go Back</a>
                </div>

                <div class="card-body">
                    <x-all-error-component />
                    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-12">
                                <img id="imagePreview" src="{{ asset('front/assets/images/preview.jpg') }}"
                                    alt="" class="mb-2 rounded" width="125" height="125">
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input name="image" class="form-control @error('image') is-invalid @enderror"
                                        type="file" id="image" onchange="preview()">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-floating col-6 mb-3">
                                <x-required-component type="text"  names="name"
                                    placeholder="Name" classes="form-control">Name
                                </x-required-component>
                            </div>
                            <div class="form-floating col-6 mb-3">
                                <x-required-component type="number" required="true" names="order"
                                                      placeholder="Slider Order" classes="form-control">
                                    Slider Order
                                </x-required-component>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                        <button type="reset" class="btn btn-danger float-end me-2">Reset</button>
                    </form>

                </div>

            </div>
        </div>
    </main>

    <script>
        function thumbnailPreview() {
            blogThumbnail.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

</x-app-layout>
