<x-app-layout>


    <div class="my-4">
        <a href="{{route('blogs.create')}}"
           class="text-white my-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</a>
    </div>


    <livewire:blog-table/>



</x-app-layout>
