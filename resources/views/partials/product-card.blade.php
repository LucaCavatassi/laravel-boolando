<!-- CARD -->
<div class="ms-card flex-grow-1">
    <!--IMAGES -->
    <div class="images">
        <img class="imgfront" src={{ asset("img/".$product["frontImage"]) }} alt="Levis Relaxed Fit Tee">
        <img class="imgback" src={{ asset("img/".$product["backImage"]) }} alt="Levis Relaxed Fit Tee">
    </div>
    <!-- IMAGES -->

    {{-- ITEM INFO --}}
    <div class="py-2">
        <a class="fs-5" href="">{{ $product["brand"] }}</a>
        <h3 class="m-0">{{ $product["name"] }}</h3>
        <span class="newprice">{{$product["price"]}}€</span>
    </div>
    {{-- ITEM INFO --}}
</div>
<!-- CARD/ -->
