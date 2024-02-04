<x-app-layout>
    <main class="main-content mt-5">
        <div class="container-fluid content-inner py-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Teachers</h4>
                    </div>
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body">
                    @livewire('teacher-data-table')
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
