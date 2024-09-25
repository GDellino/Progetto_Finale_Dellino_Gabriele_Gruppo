<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center">{{ session('errorMessage') }}</div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif


    <header class="container-fluid vh-100 beige">
        <div class="row custom justify-content-evenly">
            <div class="col-12 col-md-7 d-flex align-items-center justify-content-center  ">
                <img class="imgCustom rounded-5 " src='/storage/images/provabg2.jpg 'alt="">
            </div>
            <div class="col-12 col-md-5 d-flex flex-column  ">
                <div class="h-50 d-flex flex-column justify-content-end align-items-start ">
                    <h1 class=" titolo">Presto.it</h1>
                    <h4 class="mt-3">{{__('ui.phrase')}}</h4>
                </div>
                <div class="d-flex justify-content-start align-items-center h-50">
                    <a href="{{ route('article.create') }}" class="btn-wel text-white ">{{__('ui.insertAd')}}</a>
                </div>
            </div>
        </div>
    </header>

    <section class="beige mb-3 ">
        <div class="sectionColor">
            <div class="container-fluid text-center py-5 ">
                <h1 class="py-5 text-center titleColor">{{__('ui.latestAds')}}</h1>
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


</x-layout>
