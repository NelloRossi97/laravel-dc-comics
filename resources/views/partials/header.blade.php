<header>
    <nav class="navbar fw-semibold container navbar-expand-lg">
        <div class="container-fluid">
            {{-- Logo --}}

            <a class="navbar-brand " href="{{ route('home') }}">
                <img src="/image/goblin-logo.png" alt="logo" width="40" height="40">
            </a>
            {{-- Burger Menù --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- Navbar Start --}}
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    @foreach ($data['headerLinks'] as $links)
                        @if (array_key_exists('dropdown', $links))
                            {{-- DropDown Menù --}}
                            <li class="nav-item dropdown ">
                                <div class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{-- DropDown Title --}}
                                    {{ $links['text'] }}
                                </div>

                            </li>
                        @else
                            {{-- Simple Anchor Link --}}
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route($links['href']) }}">
                                    {{ $links['text'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
