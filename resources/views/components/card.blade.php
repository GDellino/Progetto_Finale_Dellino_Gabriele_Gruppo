<div class="card" style="width: 18rem;">
    <img src="http://picsum.photos/401" class="card-img-top" alt="Manca immagine">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <p class="card-text">{{$article->description}}</p>
      <p class="card-text">{{$article->price}}€</p>
      <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
      <a href="{{route('byCategory', ['category' => $article->category])}}" class="btn btn-outline-info">{{$article->category->name}}</a>
    </div>
</div>