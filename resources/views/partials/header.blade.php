<header>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center py-3">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
            <ul class="list-unstyled d-flex mb-0">
                <li class="mx-3">CHARACTERS</li>
                <li class="mx-3"><a href="{{ route('comics.index') }}">COMICS</a></li>
                <li class="mx-3">MOVIES</li>
                <li class="mx-3">TV</li>
                <li class="mx-3">GAMES</li>
                <li class="mx-3">COLLECTIBLES</li>
                <li class="mx-3">VIDEOS</li>
                <li class="mx-3">FANS</li>
                <li class="mx-3">NEWS</li>
                <li class="mx-3">SHOP</li>
            </ul>
            <div class="search">
                <input type="search" placeholder="cerca">
            </div>
        </div>
    </div>
</div>
</header>