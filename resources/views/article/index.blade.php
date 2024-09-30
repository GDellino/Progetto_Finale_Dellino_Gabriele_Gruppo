<x-layout>
    <div class="container-fluid  hNav container-custom ">
        <div class="row row-log">
            <div class="col-12 ">
                <h1 class="display-3 text-center py-5 titolo1">
                    {{__('ui.allArticles')}}
                </h1>

            </div>
        </div>
        <div class="container-fluid text-center">
            <div class='row justify-content-center align-items-center min-vh-100 '>
                @forelse ($articles as $article)
                    <div class="col-12 col-md-3 p-5">
                        <x-card :article="$article" />
                    </div>
                @empty
                    <div class="col-3">
                        <h3 class="text-center">{{__('ui.noArticlesYet')}}</h3>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <div>
                {{$articles->links()}}
            </div>
        </div>
    </div>

</x-layout>