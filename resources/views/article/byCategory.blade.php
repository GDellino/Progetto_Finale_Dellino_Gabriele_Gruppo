<x-layout>
    <div class="container-fluid min-vh-100 container-custom mb-4 hNav ">
        <div class="row justify-content-center align-items-center text-center row-log py-5">
            <div class="col-12 ">
                <h1 class="display-3">{{__('ui.categoryArticles')}}
                    <span class="fst-italic fw-bold">{{__("ui.$category->name")}}</span>
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center pt-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
            <div class="col-12 text-center min-vh-100">
                <h3>{{__("ui.noArticles")}} {{__("ui.$category->name")}}</h3>
                @auth
                    <a class="btn btn-warning text-black my-5" href="{{route('article.create')}}">{{__("ui.publishArticle")}}</a>
                @endauth
            </div>
            @endforelse
        </div>
    </div>
</x-layout>
