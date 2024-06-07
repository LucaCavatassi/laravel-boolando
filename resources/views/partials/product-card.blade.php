<!-- CARD -->
<div class="ms-card flex-grow-1">
    <!--IMAGES -->
    <div class="images">
        <img class="imgfront" src={{ asset("img/".$product["frontImage"]) }} alt="Levis Relaxed Fit Tee">
        <img class="imgback" src={{ asset("img/".$product["backImage"]) }} alt="Levis Relaxed Fit Tee">

        {{-- LIKE BADGE --}}
        <div class="like-badge">
            <span class="unliked"><i class="fa-regular fa-heart"></i></span>
            <span class="liked"><i class="fa-solid fa-heart"></i></span>
        </div>
        {{-- LIKE BADGE --}}
    </div>
    <!-- IMAGES -->

    {{-- ITEM INFO --}}
    <div class="py-2">
        <a class="fs-6" href="">{{ $product["brand"] }}</a>
        <h3 class="m-0">{{ $product["name"] }}</h3>
        <span class="newprice">{{$product["price"]}}€</span>
    </div>
    {{-- ITEM INFO --}}
</div>
<!-- CARD/ -->
