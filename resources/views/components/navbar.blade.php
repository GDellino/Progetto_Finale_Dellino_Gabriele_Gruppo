<nav class="navbar navbarCustom navbar-expand-lg p-3">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse nav-lg" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-_locale lang="it" />
                </li>
                <li class="nav-item">
                   <x-_locale lang="en" />
                </li>
                <li class="nav-item">
                    <x-_locale lang="es" />
                </li>
            </ul>
            
            {{-- <div class="d-flex justify-content-center align-items-center"> --}}
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="{{ route('article.index') }}">{{__('ui.allArticles')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                                </li>
                                @if (!$loop->last)
                                    <hr class="dropdown-divider">
                                @endif
                            @endforeach

                        </ul>
                    </li>
                    @auth
                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link text-black position-relative w-sm-25"
                                    href="{{ route('revisor.index') }}">Zona revisore
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}</span>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item dropdown position-absolute end-0 pe-5">
                            <a class="nav-link dropdown-toggle text-black" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle text-black" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Autenticazione
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('login') }}">Accedi</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">Registrati</a></li>
                            </ul>
                        </li>
                    @endauth

                    <form class="ms-3" role="search" action="{{ route('article.search') }}"
                        method="GET">
                        <div class="search-input-wrapper">
                            <input class="form-control form-control-sm rounded-pill py-1 pe-4 ps-2 search-input"
                                style="width: 150px;" placeholder="Cerca..." aria-label="Search" name="query">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                class="bi bi-search search-icon" viewBox="0 0 16 16" style="right: 8px; top: 50%;"
                                onclick="this.closest('form').submit();">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                    </form>
                </ul>

            {{-- </div> --}}
        </div>
    </div>
</nav>
