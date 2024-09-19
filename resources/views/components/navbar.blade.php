<nav class="navbar navbar-expand-lg shadow  ">
    <div class="container-fluid ">
        <a class="navbar-brand text-white" href="#">Presto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{route('byCategory', ['category' => $category])}}">{{$category->name}}</a></li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach

                    </ul>
                </li>
                @auth
                    @if (Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="nav-link text-white position-relative w-sm-25" href="{{route('revisor.index')}}">Zona revisore
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
                        </a>
                    </li>
                    @endif
                    <li class="nav-item dropdown position-absolute end-0 pe-5">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao,{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-item btn" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout">@csrf</form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Autenticazione
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('login') }}">Accedi</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Registrati</a></li>
                        </ul>
                    </li>
                @endauth 
                {{-- Form per la ricerca --}}
                <form class="d-flex px-5" role="search" action="{{route('article.search')}}" method="GET">
                    <div class="input-group">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="search" name="query">
                        <button class="btn btn-outline-success input-group-text" type="submit" id="basic-addon2">Cerca</button> 
                    </div>
                </form>
            </ul>
        </div>
    </div>
</nav>
