<x-layout>
    <div class="container-fluid pt-5 min-vh-100">
        <div class="row row-log">
            <div class="col-3">
                <div class="roundend shadow bg-body-secondary">
                    <h1 class="display-5 text-center pb-2">
                        Revisor dashboard
                    </h1>
                </div>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if($article_to_check)
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="row justift-content-center">
                    @for ($i = 0; $i < 6 ; $i++)
                    <div class="col-6 col-md-4 mb-4 text-center">
                        <img src="http://picsum.photos/401"
                        alt="immagine segnaposto"
                        class="img-fluid rounded shadow">
                    </div>
                    @endfor

                </div>
            </div>
            <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                <div>
                    <h1>{{$article_to_check->title}}</h1>
                    <h3>Autore:{{$article_to_check->user->name}}</h3>
                    <h4>{{$article_to_check->price}}€</h4>
                    <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
                    <p class="h6">{{$article_to_check->description}}</p>
                </div>
                <div class="d-flex justify-content-around pb-4">
                    <form action="{{route('reject',['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                    </form>
                    <form action="{{route('accept',['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center text-center height-custom">
            <div class="col-12">
                <h1 class="fst-italic display-4">Non ci sono articoli da revisionare</h1>
                <a href="{{route('homepage')}}" class="mt-5 btn btn-primary">Torna alla homepage</a>
            </div>
        </div>
        @endif
    </div>
</x-layout>