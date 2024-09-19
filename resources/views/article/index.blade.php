<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center">
                    Tutti gli articoli
                </h1>

            </div>
        </div>
        <div class="container-fluid text-center">
            <div class='row justify-content-center align-items-center'>
                @forelse ($articles as $article)
                    <div class="col-12 col-md-3 p-5">
                        <x-card :article="$article" />
                    </div>
                @empty
                    <div class="col-3">
                        <h3 class="text-center bg-success">Non ci sono ancora articoli</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{$articles->links()}}
        </div>
    </div>
</x-layout>