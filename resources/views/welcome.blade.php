<x-layout>
    <div class="vh-100">
        <h1 class="text-center">Helloooo</h1>
    </div>
    @auth
        <a href="{{ route('article.create') }}" class="btn btn-primary">Inserisci Annuncio</a>
    @endauth
    <div class="container-fluid text-center bg-danger ">
        <div class='row justify-content-center align-items-center'>
    @forelse ($articles as $article)
        <div class="col-12 col-md-3 p-5">
            <x-card :article="$article"/>
        </div>
    @empty
        <div class="col-3">
            <h3 class="text-center">Non ci sono ancora articoli</h3>
        </div>
    @endforelse
        </div>
    </div>
</x-layout>
