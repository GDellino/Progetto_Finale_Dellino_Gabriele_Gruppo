<x-layout>
    <h1>HELLO</h1>
    @auth
        <a href="{{ route('article.create') }}" class="btn btn-primary">Inserisci Annuncio</a>
    @endauth

</x-layout>
