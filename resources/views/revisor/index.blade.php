<x-layout>
    <div class="container-fluid pt-5 min-vh-100 container-custom mb-3 hNav ">
        <div class="row row-log ">
            <div class="col-3">
                <div class="rounded shadow">
                    <h1 class="display-5 text-center pb-2 ">
                        {{ __('ui.reviewerDashboard') }}
                    </h1>
                </div>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if ($article_to_check)
            <div class="row justify-content-evenly m-4 p-4">
                @if ($article_to_check->images->count())
                    @foreach ($article_to_check->images as $key => $image)
                        <div class="col-6 ">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ $image->getUrl(300, 300) }}"
                                            alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}"class="img-fluid  rouded shadow object-fit-cover">
                                    </div>
                                    <div class="col-md-5 ps-3">
                                        <div class="card-body">
                                            <h5>Labels</h5>
                                            @if ($image->labels)
                                                @foreach ($image->labels as $label)
                                                    #{{ $label }},
                                                @endforeach
                                            @else
                                                <p class="fst-italic">No labels</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3 ps-3">
                                        <div class="card-body">
                                            <h5>Ratings</h5>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->adult }}">
                                                    </div>
                                                </div>
                                                <div class="col-10">Adult</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->violence }}">
                                                    </div>
                                                </div>
                                                <div class="col-10">violence</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->spoof }}">
                                                    </div>
                                                </div>
                                                <div class="col-10">spoof</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->racy }}">
                                                    </div>
                                                </div>
                                                <div class="col-10">racy</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->medical }}">
                                                    </div>
                                                </div>
                                                <div class="col-10">medical</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-6 col-md-4">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="http://picsum.photos/401" alt="immagine segnaposto"
                                    class="img-fluid rounded shadow">
                            </div>
                        @endfor
                    </div>

                @endif

                <div class="col-12 col-md-6 ps-4 d-flex flex-column justify-content-between">
                    <div>
                        <h1 class="pb-2">{{ $article_to_check->title }}</h1>
                        <h3 class="pb-2">{{ __('ui.author') }}:{{ $article_to_check->user->name }}</h3>
                        <h4 class="pb-2">{{ $article_to_check->price }}€</h4>
                        <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                        <p class="h6">{{ $article_to_check->description }}</p>
                    </div>
                    <div class="d-flex justify-content-evenly pb-4">
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger py-2 px-5 fw-bold">{{ __('ui.reject') }}</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success py-2 px-5 fw-bold">{{ __('ui.accept') }}</button>
                        </form>
                    </div>
                </div>
            </div>



    </div>
@else
    <div class="row justify-content-center align-items-center text-center custom">
        <div class="col-12">
            <h1 class="fst-italic display-4"> {{ __('ui.noArticlesToReview') }}</h1>
            <a href="{{ route('homepage') }}" class="mt-5 btn btn-primary">{{ __('ui.backToHomepage') }}</a>
        </div>
    </div>
    @endif
    </div>
</x-layout>
