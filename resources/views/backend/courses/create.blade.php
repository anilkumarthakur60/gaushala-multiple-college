<x-app-layout>
    <main class="main-content mt-5">
        <div class="container-fluid content-inner py-0">
            <div class="card pb-4">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Notice</h4>
                    </div>
                    <a href="{{route('blogs.index')}}" class="btn btn-primary">Go Back</a>
                </div>

                <div class="card-body">
                    <x-all-error-component/>
                    <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-12">
                                <img id="imagePreview" src="{{asset('front/assets/images/preview.png')}}" alt=""
                                     class="mb-2 rounded" width="125" height="125">
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
                                <x-required-component type="text" required="required" names="name" placeholder="Name"
                                                      classes="form-control">Name
                                </x-required-component>
                            </div>


                            <div class="col-12 my-2">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" required cols="30"
                                          rows="10">{!! old('description') !!}</textarea>

                                <x-jet-input-error for="description"></x-jet-input-error>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                <select class="form-control multiselect-tag" id="tags" name="tags[]"
                                        multiple="multiple">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag}}">{{$tag}}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="tags"></x-jet-input-error>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                        <button type="reset" class="btn btn-danger float-end me-2">Reset</button>
                    </form>

                </div>

            </div>
        </div>
    </main>
    <x-select2/>

    <script>
        function thumbnailPreview() {
            blogThumbnail.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('description', options);
    </script>
</x-app-layout>

