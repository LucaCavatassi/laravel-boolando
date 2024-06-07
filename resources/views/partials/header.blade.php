<header>
    <div class="d-flex  align-items-center justify-content-between">
        <ul class="p-0 d-flex align-items-center gap-3 fs-4 text-white fw-bolder">
            <li><a href="">Donna</a></li>
            <li><a href="">Uomo</a></li>
            <li><a href="">Bambino</a></li>
        </ul>
        <a class="d-flex justify-content-center" href="{{ route("home") }}">
            <img class="img-fluid w-50" src="{{ asset("img/boolean-logo.png")  }}" alt="logo">
        </a>
        <ul class="p-0 d-flex align-items-center justify-content-end gap-3 fs-4 text-white fw-bolder">
            <li><a href="{{ route("user")}}"><i class="fa-regular fa-user"></i></a></li>
            <li><a href="{{ route("fav")}}"><i class="fa-regular fa-heart"></i></a></li>
            <li><a href="{{ route("cart")}}"><i class="fa-solid fa-bag-shopping"></i></a></li>
        </ul>
    </div>
</header>