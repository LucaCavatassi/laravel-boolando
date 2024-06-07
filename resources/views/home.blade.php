@extends('layouts.app')

@section('content')
    <div class="home-cont d-flex justify-content-center flex-wrap py-3">
        @foreach ($products as $product)
            @include('partials.product-card')
        @endforeach
        
    </div>
@endsection