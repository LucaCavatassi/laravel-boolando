<!-- CARD -->
<div class="ms-card flex-grow-1">
    <!--IMAGES -->
    <div class="images">
        <img class="imgnormal" src={{ asset("img/".$product["frontImage"]) }} alt="Levis Relaxed Fit Tee">
    </div>
    <!-- IMAGES -->

    {{-- ITEM INFO --}}
    <div class="item-info">
        <a class="brand" href="">{{ $product["brand"] }}</a>
        <h3>{{ $product["name"] }}</h3>
        <span class="newprice">{{$product["price"]}}€</span>
    </div>
    {{-- ITEM INFO --}}
</div>
<!-- CARD/ -->
