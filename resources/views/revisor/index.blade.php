<x-layout>
    <div class="container-fluid pt-5 min-vh-100 container-custom mb-3 hNav">
        <div class="row row-log">
            <div class="col-3">
                <div class="rounded shadow">
                    <h1 class="display-5 text-center pb-2 ">
                        Revisore dashboard
                    </h1>
                </div>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if ($article_to_check)
            @if ($article_to_check->images->count())
                @foreach ($article_to_check->images as $key => $image)
                    <div class="col-6 col-md-4 mb-4">
                        <img src="{{$image->getUrl(300, 300)}}"
                            alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}"class="img-fluid  rouded shadow object-fit-cover">
                    </div>
                @endforeach
            @else
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8">
                        <div class="row justift-content-center">
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                    <img src="http://picsum.photos/401" alt="immagine segnaposto"
                                        class="img-fluid rounded shadow">
                                </div>
                            @endfor

                        </div>
                    </div>
            @endif
            <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                <div>
                    <h1>{{ $article_to_check->title }}</h1>
                    <h3>Autore:{{ $article_to_check->user->name }}</h3>
                    <h4>{{ $article_to_check->price }}€</h4>
                    <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                    <p class="h6">{{ $article_to_check->description }}</p>
                </div>
                <div class="d-flex justify-content-around pb-4">
                    <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                    </form>
                    <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                    </form>
                </div>
            </div>
    </div>
@else
    <div class="row justify-content-center align-items-center text-center custom">
        <div class="col-12">
            <h1 class="fst-italic display-4">Non ci sono articoli da revisionare</h1>
            <a href="{{ route('homepage') }}" class="mt-5 btn btn-primary">Torna alla homepage</a>
        </div>
    </div>
    @endif
    </div>
</x-layout>
