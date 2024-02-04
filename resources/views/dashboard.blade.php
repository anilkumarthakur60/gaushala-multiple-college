<x-app-layout>
    <div class="container-fluid content-inner py-0 pt-5">

        <div class="row">
            @foreach ($data as $d)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="{{ $d['route'] }}">
                        <div class=" card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="{{ $d['bgClass'] }} rounded p-3">
                                        <i class="fa {!! $d['icon'] !!}"></i>
                                    </div>
                                    <div class="text-end">
                                        <h2 class="counter" style="visibility: visible;">{{ $d['count'] }}</h2>
                                        {!! $d['name'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

</x-app-layout>
