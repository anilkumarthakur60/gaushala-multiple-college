<x-app-layout>


    <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-2 gap-3">
            <div class="">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="email" id="email"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="name@flowbite.com" required>
                @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="">

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload
                    multiple files</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="multiple_files" type="file" multiple>

            </div>
            <div class="">
                <select class="form-control multiselect-tag" id="tags" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{$tag->name}}"  {{$blog->hasTag($tag->name)?'selected':''}} >{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="">
                <textarea id="my-editor" name="description" class="form-control">{!! old('description') !!}</textarea>
            </div>

        </div>
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>


    </form>

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('my-editor', options);

    </script>
</x-app-layout>


@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script !src="">

        $(".multiselect-tag").select2({
            tags: true,
        })
    </script>
@endpush
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
