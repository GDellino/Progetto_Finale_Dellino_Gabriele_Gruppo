<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center">{{ session('errorMessage') }}</div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
    <header class="container-fluid vh-75 py-5 ">
        <div class="row custom justify-content-evenly">
            <div class="col-12 col-md-8 bg-img img-fluid">
                {{-- <img src="../../public/storage/images/Progetto\ senza\ titolo.png" alt=""> --}}
            </div>
            <div class="col-12 col-md-3  d-flex flex-column justify-content-center aling-items-center  ">
                <div class="h-50 d-flex flex-column justify-content-end align-items-center ">
                    <h1 class="text-center titolo">Presto.it</h1>
                    <h4 class="text-center">Vendi cio che vuoi!!!!</h4>
                </div>
                <div class="d-flex justify-content-center align-items-center h-50">
                    <a href="{{ route('article.create') }}" class="btn-wel ">Inserisci Annuncio</a>
                </div>
            </div>
        </div>
    </header>

     <div class="wh-100 bg-white py-3">

     </div>
     <section class="section-color">
         <div class="container-fluid text-center py-5 ">
            <h2 class="py-5 text-center">Ultimi Annunci</h2>
            <div class='row justify-content-center align-items-center '>
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
    </section>



</x-layout>
