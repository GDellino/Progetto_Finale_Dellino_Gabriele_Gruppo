<x-layout>
    <div class="container-fluid min-vh-100 container-custom mb-5 hNav ">
        <div class="row justify-content-center align-items-center text-center py-5  row-log ">
            <div class="col-12 ">
                <h1 class="display-3"> {{ $article->title }}</h1>
            </div>
        </div>
        <div class="row justify-content-center  align-items-center ">
            <div class="col-12 col-md-4 mb-3 d-flex">
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
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
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
                    </div>    
                    @else
                        <img src="http://picsum.photos/401" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>
        
        {{-- post-it --}}
            <div class="col-12 col-md-8 w-50  bg-dark heightCustom ">
                <h3 class="text-white fw-bold ">{{ __('ui.description') }}</h3>
                <p class="text-white">{{ $article->description }}</p>
                <h4 class="fw-blod text-white  ">{{ __('ui.price') }}:
                    {{ $article->price }} €
                </h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad maxime deserunt natus blanditiis, in aut ea
                    nobis nisi! Quibusdam eum hic doloremque tempora iste impedit quaerat neque, ea vero amet?Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit. Temporibus eligendi exercitationem asperiores voluptas ex
                    repellat sit. Amet explicabo rem soluta fugiat commodi dolorum molestias magni, aut sint fugit ex et!
                </p>
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
