<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center">{{ session('errorMessage') }}</div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
    <header class=" d-flex flex-column justify-content-center align-items-center mt-5">
        <h1 class="text-center titolo">Presto.it</h1>


        <a href="{{ route('article.create') }}" class="btn btn-primary">Inserisci Annuncio</a>

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
