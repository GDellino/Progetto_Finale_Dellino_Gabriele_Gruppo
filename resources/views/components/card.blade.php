<div class="image-block div-cu">
    <h5 class="text-black">{{ $article->title }}</h5>
    <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'http://picsum.photos/400' }}" class="card-img-top" alt="Immagine dell'articolo {{$article->title}}">
    <figcaption class="">
        <h3 class="h3-1">
            {{__('ui.moreInfo')}}
        </h3>
        <p class="text-truncate">{{__('ui.description')}}: {{ $article->description }}</p>
        <p>{{__('ui.price')}}: {{ $article->price }}€</p>
        <p>{{__('ui.createdAt')}}: {{$article->created_at->format('d/m/Y')}}</p>
        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning btn-card text-black">{{__('ui.details')}}</a>
        <a href="{{ route('byCategory', ['category' => $article->category]) }}"
            class="btn btn-card btn-light text-black ">{{ $article->category->name }} </a>
    </figcaption>
</div>
