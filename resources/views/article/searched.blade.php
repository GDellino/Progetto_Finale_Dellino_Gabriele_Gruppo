<x-layout>
    <div class="container-fluid vh-100 container-custom mb-3  hNav">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center mt-5">
                    {{__('ui.searchResults')}} <span class="fst-italic">{{ $query }}</span>
                </h1>
            </div>
        </div>
        <div class='row justify-content-center  align-items-center mt-5'>
            @forelse ($articles as $article)
                <div class="col-12 col-md-3 mt-3 ">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-3">
                    <h3 class="text-center ">{{__('ui.noArticlesYet')}}</h3>
                </div>
            @endforelse
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
