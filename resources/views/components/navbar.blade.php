<nav class="container navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <x-nav-link :active="request()->routeIs('/')" href="{{ route('/') }}">Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('timeline')" href="{{ route('timeline') }}">timeline</x-nav-link>
                <x-nav-link :active="request()->routeIs('users')" href="{{ route('users') }}">users</x-nav-link>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info">logout</button>
                    </form>
                @else
                    <x-nav-link href="{{ route('login') }}">login</x-nav-link>
                @endauth
            </ul>
        </div>
    </div>
</nav>
