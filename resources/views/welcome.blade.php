<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center">{{ session('errorMessage') }}</div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
    <header class="container-fluid mt-5 vh-100">
        <div class="row custom justify-content-evenly">
            <div class="col-12 col-md-8 bg-img bg-danger-subtle">
            </div>
            <div class="col-12 col-md-3 bg-col d-flex flex-column justify-content-center aling-items-center rounded-4 ">
                <div class="h-50 d-flex flex-column justify-content-end align-items-center ">
                    <h1 class="text-center titolo">Presto.it</h1>
                    <h4 class="text-center">Vendi cio che vuoi!!!!</h4>

                </div>
                <div class="d-flex justify-content-center align-items-center h-50">
                    <a href="{{ route('article.create') }}" class="btn-wel rounded-4">Inserisci Annuncio</a>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container-fluid text-center bg-danger ">
            <div class='row justify-content-center align-items-center'>
                @forelse ($articles as $article)
                    <div class="col-12 col-md-3 p-5">
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
