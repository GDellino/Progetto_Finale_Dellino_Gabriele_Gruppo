<x-layout>
    <div class="container-fluid min-vh-100 ">
        <div class="row justify-content-center align-items-center text-center my-5 row-log ">
            <div class="col-12 my-4">
                <h1 class="display-3"> {{$article->title}}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 col-md-4 mb-3 d-flex justify-content-center ">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://picsum.photos/400" class="d-block  rounded-3 shadow" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="http://picsum.photos/401" class="d-block  rounded-3 shadow" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="http://picsum.photos/402" class="d-block  rounded-3 shadow" alt="">
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Precente</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Successivo</span>
                        </button>
                    </div>
                </div>
            </div>
                <div class="col-12 col-md-3 mb-3 height-custom d-flex flex-column  ">
                    <div class="d-flex flex-column justify-content-between  align-items-center h-100 py-5">
                    <div class="quote-container">
                        <i class="pin"></i>
                        <blockquote class="note yellow ">
                            <h3 class="text-white fw-bold text-center">Descrizione</h3>
                            <p class="text-white">{{$article->description}}</p>

                                <h4 class="fw-blod text-white fixed-bottom text-end p-3">Prezzo: {{$article->price}} €</h4>


                        </div>
                        </blockquote>
                      </div>
                </div>
        </div>
    </div>
</x-layout>
