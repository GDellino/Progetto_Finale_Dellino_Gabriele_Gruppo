{{-- <div class="card shadow" style="width: 18rem;">
    <img src="http://picsum.photos/401" class="card-img-top" alt="Manca immagine">
    <div class="card-body">
        <h5 class="card-title">Titolo: {{ $article->title }}</h5>
        <p class="card-text"> Descrizione: {{ $article->description }}</p>
        <p class="card-text">Prezzo: {{ $article->price }}€</p>
        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
        <a href="{{ route('byCategory', ['category' => $article->category]) }}"
            class="btn btn-outline-info">{{ $article->category->name }}</a>
    </div>
</div> --}}


<div class="image-block div-cu">
    <h5>{{ $article->title }}</h5>
    <img src="{{ $article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'http://picsum.photos/400' }}" class="card-img-top" alt="Immagine dell'articolo {{$article->title}}">
    <figcaption class="">
        <h3 class="h3-1">
            More Info
        </h3>
        <p class="text-truncate">Descrizione: {{ $article->description }}</p>
        <p>Prezzo: {{ $article->price }}€</p>
        <p>Creato il: {{$article->created_at->format('d/m/Y')}}</p>
        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-card">Dettaglio</a>
        <a href="{{ route('byCategory', ['category' => $article->category]) }}"
            class="btn btn-outline-info btn-card">{{ $article->category->name }}</a>
    </figcaption>
</div>
