<x-layout>


    <header class="container-fluid vh-100 beige">
        <div class="position-absolute hNav ms-5">
            @if (session()->has('errorMessage'))
                <div class="alert alert-danger text-center rounded-5">{{ session('errorMessage') }}</div>
            @endif
            @if (session()->has('message'))
                <div class="alert  text-center rounded-5 alertCustom ">{{ session('message') }}</div>
            @endif
        </div>
        <div class="row custom justify-content-evenly">
            <div class="col-12 col-md-5 d-flex flex-column justify-content-end ">
                <div class="h-50 d-flex flex-column justify-content-end align-items-start ms-5 ">
                    <h1 class=" titolo">Presto.it</h1>
                    <h4 class="mt-3">{{__('ui.phrase')}}</h4>
                </div>
                <div class="d-flex justify-content-start align-items-center h-25 ms-5">
                    <a href="{{ route('article.create') }}" class="btn-wel text-white ">{{__('ui.insertAd')}}</a>
                </div>

            </div>
            <div class="col-12 col-md-7 d-flex align-items-center justify-content-center  ">
                <img class="imgCustom rounded-5 " src='/storage/images/provabg2.jpg 'alt="">
            </div>

        </div>
    </header>

    <section class="beige">
        <div class="sectionColor">
            <div class="container-fluid text-center py-5 ">
                <h2 class="py-5 text-center titleColor">{{__('ui.latestAds')}}</h2>
                <div class='row justify-content-evenly align-items-center gap-5 '>
                    @forelse ($articles as $article)
                        <div class=" col-12 col-md-3 d-flex justify-content-center align-items-center  ">
                            <x-card :article="$article" />
                        </div>
                    @empty
                        <div class="col-3">
                            <h3 class="text-center">Non ci sono ancora articoli</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid sectionCustom v-100 p-5">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="d-flex flex-column align-items-center border-end">
                    <i class="bi bi-cart-check-fill fs-3"></i>
                    <h3>Prodotti venduti</h3>
                    <span class="fs-2" id="firstNumber"></span>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="d-flex flex-column align-items-center border-end">
                    <i class="bi bi-person-fill-check fs-3"></i>
                    <h3>Clienti soddisfatti</h3>
                    <span class="fs-2" id="secondNumber"></span>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="d-flex flex-column align-items-center ">
                    <i class="bi bi-stars fs-3"></i>
                    <h3>Recensioni</h3>
                    <span class="fs-2" id="thirdNumber"></span>
                </div>
            </div>
        </div>
    </section>

</x-layout>
