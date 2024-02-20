<div class="container-fluid p-0 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse($sliders as $key=>$slider)
                <li data-target="#header-carousel" data-slide-to="{{$key}}" class="{{$key===0?'active':''}}"></li>
            @empty
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            @endforelse

        </ol>
        <div class="carousel-inner">

            @forelse($sliders as $slider)

                <div class="carousel-item {{$loop->iteration==1?'active':''}}" style="min-height: 300px;">
                    <img class="position-relative w-100"
                         src="{{$slider->firstMedia('image')?->getUrl()?? ('frontend/img/carousel-1.jpg')}}"
                         style="min-height: 300px; object-fit: cover;" alt="{{$slider->name}}">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">
                            </h1>
                        </div>
                    </div>
                </div>
            @empty
                <div class="carousel-item active " style="min-height: 300px;">
                    <img class="position-relative w-100" src="{{asset('frontend/img/carousel-1.jpg')}}"
                         style="min-height: 300px; object-fit: cover;" alt="GMC College">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Unlock Your Potential</h1>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
</div>

