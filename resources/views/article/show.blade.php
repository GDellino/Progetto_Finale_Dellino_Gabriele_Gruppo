<x-layout>
    <div class="container-fluid min-vh-100 container-custom mb-5 hNav ">
        <div class="row justify-content-center align-items-center text-center py-5  row-log ">
            <div class="col-12 ">
                <h1 class="display-3"> {{ $article->title }}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            <div class="col-12 col-md-5 mb-3 d-flex justify-content-center">
                @if ($article->images->count() > 0)
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach ($article->images as $key => $image)
                                <div class="swiper-slide">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="d-block  rounded-5 shadow "
                                        {{-- tolto img-custom --}}
                                        alt="Immagine{{ $key + 1 }} dell'articolo {{ $article->title }}">
                                </div>
                                @endforeach
                                {{-- btn next non funziona!!! --}}
                                {{-- <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div> --}}

                                {{-- <button class="swiper-button-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Precedente</span>
                                </button> --}}
                                {{-- <button class="swiper-button-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Successivo</span>
                                </button> --}}

                        </div>
                        <div thumbsSlider="" class="swiper mySwiper mt-3">
                            <div class="swiper-wrapper">
                                @foreach ($article->images as $key => $image)
                                    <div class="swiper-slide ">
                                        <img src="{{ $image->getUrl(300, 300) }}" class="d-block  rounded-5 "
                                            {{-- tolto img-custom --}}
                                            alt="Immagine{{ $key + 1 }} dell'articolo {{ $article->title }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <img src="http://picsum.photos/401" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>
            {{-- post-it --}}
            <div class="col-12 col-md-6 mb-3 height-custom d-flex ms-5">
                <div class="d-flex flex-column justify-content-between  align-items-end h-100 py-5">
                    <div class="quote-container">
                        <i class="pin"></i>
                        <div class="note yellow ">
                            <h3 class="text-white fw-bold text-center">{{ __('ui.description') }}</h3>
                            <p class="text-white">{{ $article->description }}</p>
                            <h4 class="fw-blod text-white fixed-bottom text-end p-3">{{ __('ui.price') }}:
                                {{ $article->price }} €
                            </h4>

                        </div>
                        {{-- <blockquote class="note yellow "> --}}
                        {{-- </blockquote> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
            </div>
        </div>
    </div> --}}



</x-layout>
